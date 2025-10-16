<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Condominio;
use App\Models\Endereco;
use App\Models\Cidade;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\TipoUsuario;

class FullFlowTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->seed();
    }

    public function test_end_to_end_roles_and_permissions(): void
    {
        // 1) Admin faz login e cadastra um proprietário
        $admin = User::factory()->admin()->create([
            'password' => Hash::make('Admin123!'),
            'email' => 'admin@example.com'
        ]);

        $adminLogin = $this->postJson('/api/login', [
            'email' => 'admin@example.com',
            'password' => 'Admin123!'
        ])->assertStatus(200);
        $adminToken = $adminLogin->json('token');

        $propTipoId = TipoUsuario::where('tipo', 'Proprietário')->value('id');
        $newOwnerPayload = [
            'name' => 'Proprietario 1',
            'cpf' => '123.456.789-10',
            'telefone' => '(11) 90000-0000',
            'email' => 'prop1@example.com',
            'password' => 'Proprietario123!',
            'password_confirmation' => 'Proprietario123!',
            'tipo_usuario_id' => $propTipoId,
        ];

        $this->withHeader('Authorization', 'Bearer ' . $adminToken)
            ->postJson('/api/user', $newOwnerPayload)
            ->assertStatus(200);

        // 2) Proprietário faz login e cadastra condomínio e apartamento
        $ownerLogin = $this->postJson('/api/login', [
            'email' => 'prop1@example.com',
            'password' => 'Proprietario123!'
        ])->assertStatus(200);
        $ownerToken = $ownerLogin->json('token');

        // Sanity check: owner can access /api/user/me
        $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->getJson('/api/user/me')
            ->assertStatus(200);

        // Prepara Cidade e Endereco (seeder já cria estados/cidades, precisamos de um endereco válido)
        $cidade = Cidade::first();
        $enderecoPayload = [
            'cep' => '01001-000',
            'logradouro' => 'Rua A',
            'complemento' => 'Apto 1',
            'bairro' => 'Centro',
            'cidade_id' => $cidade?->id ?? 1,
        ];

        $enderecoResp = $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->postJson('/api/endereco/endereco', $enderecoPayload)
            ->assertStatus(200);

        // Cadastra condominio
        $condPayload = [
            'nome' => 'Condominio Teste',
            'endereco' => $enderecoResp->json('endereco.id') ?? 1,
        ];
        $condResp = $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->postJson('/api/condominio/condominio', $condPayload)
            ->assertStatus(200);

        // Cadastra bloco
        $blocoPayload = [
            'bloco' => 'Bloco A',
            'descricao' => 'Bloco principal',
            'condominio' => $condResp->json('condominio.id') ?? 1,
        ];
        $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->postJson('/api/condominio/bloco/bloco', $blocoPayload)
            ->assertStatus(200);

        // Lista blocos
        $blocos = $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->getJson('/api/condominio/bloco/bloco')
            ->assertStatus(200);
        $blocoId = $blocos->json('bloco.data.0.id');

        // Cadastra apartamento
        $apPayload = [
            'numero' => '101',
            'bloco' => $blocoId,
        ];
        $this->withHeader('Authorization', 'Bearer ' . $ownerToken)
            ->postJson('/api/condominio/bloco/apartamento/apartamento', $apPayload)
            ->assertStatus(200);

        // 3) Inquilino faz login e atualiza seus dados
        $tenant = User::factory()->inquilino()->create([
            'password' => Hash::make('Tenant123!'),
            'email' => 'tenant@example.com'
        ]);

        $tenantLogin = $this->postJson('/api/login', [
            'email' => 'tenant@example.com',
            'password' => 'Tenant123!'
        ])->assertStatus(200);
        $tenantToken = $tenantLogin->json('token');

        $this->withHeader('Authorization', 'Bearer ' . $tenantToken)
            ->putJson('/api/user/' . $tenant->id, [
                'name' => 'Inquilino Atualizado',
                'telefone' => '(11) 95555-4444'
            ])
            ->assertStatus(200);

        // 4) Admin lista todos e deleta um usuário
        $this->withHeader('Authorization', 'Bearer ' . $adminToken)
            ->getJson('/api/user')
            ->assertStatus(200);

        $this->withHeader('Authorization', 'Bearer ' . $adminToken)
            ->deleteJson('/api/user/' . $tenant->id)
            ->assertStatus(200);
    }
}

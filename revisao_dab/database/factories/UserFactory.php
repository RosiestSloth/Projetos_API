<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\TipoUsuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $proprietarioId = TipoUsuario::where('tipo', 'Proprietário')->value('id') ?? 2;
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'cpf' => fake()->numerify('###.###.###-##'),
            'telefone' => '(11) 9' . fake()->numerify('####-####'),
            'tipo_usuario_id' => $proprietarioId, // default Proprietário for convenience in tests unless overridden
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function admin(): static
    {
        return $this->state(function () {
            $id = TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
            return ['tipo_usuario_id' => $id];
        });
    }

    public function proprietario(): static
    {
        return $this->state(function () {
            $id = TipoUsuario::where('tipo', 'Proprietário')->value('id') ?? 2;
            return ['tipo_usuario_id' => $id];
        });
    }

    public function inquilino(): static
    {
        return $this->state(function () {
            $id = TipoUsuario::where('tipo', 'Inquilino')->value('id') ?? 3;
            return ['tipo_usuario_id' => $id];
        });
    }
}

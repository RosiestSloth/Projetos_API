<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            [
                'tipo' => 'Inquilino'
            ],
            [
                'tipo' => 'Proprietário'
            ]
        ];

        foreach ($tipos as $tipo) {
            TipoUsuario::UpdateOrCreate($tipo, $tipo);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'vs17012005santos@gmail.com')->first()) {
            User::create([
                'name' => 'Vinicius Santos',
                'tipo' => 'Administrador',
                'email' => 'vs17012005santos@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
        }
        if(User::where('email', 'vendedor@example.com')->first()) {
            User::create([
                'name' => 'Ricardo',
                'tipo' => 'vendedor',
                'email' => 'vendedor@example.com',
                'password' => bcrypt('123456a'),
            ]);
        }
    }
}

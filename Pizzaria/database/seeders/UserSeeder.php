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
                'email' => 'vs17012005santos@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}

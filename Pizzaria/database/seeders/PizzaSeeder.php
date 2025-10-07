<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Pizza::where('name', 'Calabresa')->first()) {
            Pizza::create([
                'name' => 'Calabresa',
                'ingredients' => ['Calabresa', 'Mussarela', 'cebola'],
                'preco_base' => 65,
                'tamanho' => 'Grande',
                'ingredientes_extras' => ['Cheddar'],
            ]);
        }

        if(!Pizza::where('name', 'Margherita')->first()) {
            Pizza::create([
                'name' => 'Margherita',
                'ingredients' => ['Mussarela', 'Tomate', 'Manjericão'],
                'preco_base' => 55,
                'tamanho' => 'Grande',
                'ingredientes_extras' => [],
            ]);
        }
        if(!Pizza::where('name', 'Frango com Catupiry')->first()) {
            Pizza::create([
                'name' => 'Frango com Catupiry',
                'ingredients' => ['Mussarela', 'Frango', 'Catupiry'],
                'preco_base' => 60,
                'tamanho' => 'Grande',
                'ingredientes_extras' => ['Borda'],
            ]);
        }
    }
}

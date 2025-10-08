<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\User;
use App\Models\Pizza;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure there is at least one user and one pizza
        $user = User::first();
        $pizza = Pizza::first();

        if (!$user || !$pizza) {
            $user = User::first();
            $pizza = Pizza::first();
        }

        if ($user) {
            // create a pedido with two items if we have at least two pizzas
            $pizzas = Pizza::take(2)->get();
            if ($pizzas->count() >= 1) {
                // Build items payload for controller
                $items = [];
                foreach ($pizzas as $p) {
                    $items[] = [
                        'pizza_id' => $p->id,
                        'quantidade' => 1,
                        'ingredientes_extras' => $p->ingredientes_extras ?? [],
                    ];
                }

                // create via controller logic to ensure totals calculated consistently
                // but here we'll directly create using model relationships for simplicity
                if (!Pedido::where('user_id', $user->id)->exists()) {
                    $pedido = Pedido::create([
                        'user_id' => $user->id,
                        'valor_total' => 0,
                    ]);

                    foreach ($items as $itemData) {
                        $pizzaModel = Pizza::find($itemData['pizza_id']);
                        $extrasCount = is_array($itemData['ingredientes_extras']) ? count($itemData['ingredientes_extras']) : 0;
                        $precoUnitario = $pizzaModel ? floatval($pizzaModel->preco_base) + ($extrasCount * 5) : 0;
                        $precoTotal = $precoUnitario * intval($itemData['quantidade']);

                        $pedido->items()->create([
                            'pizza_id' => $itemData['pizza_id'],
                            'quantidade' => $itemData['quantidade'],
                            'ingredientes_extras' => $itemData['ingredientes_extras'],
                            'preco_unitario' => $precoUnitario,
                            'preco_total' => $precoTotal,
                        ]);
                    }

                    $pedido->load('items');
                    $pedido->recalculateTotal();
                }
            }
        }
    }
}

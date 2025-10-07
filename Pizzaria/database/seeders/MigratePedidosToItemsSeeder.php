<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\Pizza;

class MigratePedidosToItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $extraPrice = 5;

        $pedidos = Pedido::whereNotNull('pizza_id')->whereDoesntHave('items')->get();
        foreach ($pedidos as $pedido) {
            $pizza = Pizza::find($pedido->pizza_id);
            if (!$pizza) continue;

            $extrasCount = is_array($pizza->ingredientes_extras) ? count($pizza->ingredientes_extras) : 0;
            $precoUnitario = floatval($pizza->preco_base) + ($extrasCount * $extraPrice);
            $precoTotal = $precoUnitario * 1;

            // create item
            PedidoItem::create([
                'pedido_id' => $pedido->id,
                'pizza_id' => $pizza->id,
                'quantidade' => 1,
                'ingredientes_extras' => $pizza->ingredientes_extras ?? [],
                'preco_unitario' => $precoUnitario,
                'preco_total' => $precoTotal,
            ]);

            // update pedido total (keep pizza_id for backward compatibility)
            $pedido->valor_total = $precoTotal;
            $pedido->save();
        }
    }
}

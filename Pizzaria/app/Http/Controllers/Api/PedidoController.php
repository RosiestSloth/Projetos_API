<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoRequest;
use App\Models\Pedido;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index() : JsonResponse
    {
        $pedidos = Pedido::with(['user','pizza'])->orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'pedidos' => $pedidos,
        ], 200);
    }

    public function show(Pedido $pedido) : JsonResponse
    {
        $pedido->load(['user','pizza']);

        return response()->json([
            'status' => true,
            'pedido' => $pedido,
        ], 200);
    }

    public function store(PedidoRequest $request) : JsonResponse
    {
        DB::beginTransaction();

        try {
            // create pedido and its items
            $pedido = Pedido::create([
                'user_id' => $request->user_id,
                'valor_total' => 0,
            ]);

            $extraPrice = 5;
            foreach ($request->items as $itemData) {
                $pizza = \App\Models\Pizza::find($itemData['pizza_id']);
                $extrasCount = isset($itemData['ingredientes_extras']) && is_array($itemData['ingredientes_extras']) ? count($itemData['ingredientes_extras']) : 0;
                $quantidade = isset($itemData['quantidade']) ? intval($itemData['quantidade']) : 1;
                $precoUnitario = $pizza ? floatval($pizza->preco_base) + ($extrasCount * $extraPrice) : 0;
                $precoTotal = $precoUnitario * $quantidade;

                $pedido->items()->create([
                    'pizza_id' => $itemData['pizza_id'],
                    'quantidade' => $quantidade,
                    'ingredientes_extras' => $itemData['ingredientes_extras'] ?? [],
                    'preco_unitario' => $precoUnitario,
                    'preco_total' => $precoTotal,
                ]);
            }

            // recalc total from items
            $pedido->load('items');
            $pedido->recalculateTotal();

            DB::commit();

            return response()->json([
                'status' => true,
                'pedido' => $pedido,
                'message' => "Pedido cadastrado com sucesso!",
            ], 201);

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Pedido não cadastrado!",
            ], 400);
        }
    }

    public function update(PedidoRequest $request, Pedido $pedido) : JsonResponse
    {
        DB::beginTransaction();

        try {
            // update pedido items: remove existing and recreate from request
            $pedido->items()->delete();
            $extraPrice = 5;
            foreach ($request->items as $itemData) {
                $pizza = \App\Models\Pizza::find($itemData['pizza_id']);
                $extrasCount = isset($itemData['ingredientes_extras']) && is_array($itemData['ingredientes_extras']) ? count($itemData['ingredientes_extras']) : 0;
                $quantidade = isset($itemData['quantidade']) ? intval($itemData['quantidade']) : 1;
                $precoUnitario = $pizza ? floatval($pizza->preco_base) + ($extrasCount * $extraPrice) : 0;
                $precoTotal = $precoUnitario * $quantidade;

                $pedido->items()->create([
                    'pizza_id' => $itemData['pizza_id'],
                    'quantidade' => $quantidade,
                    'ingredientes_extras' => $itemData['ingredientes_extras'] ?? [],
                    'preco_unitario' => $precoUnitario,
                    'preco_total' => $precoTotal,
                ]);
            }

            $pedido->load('items');
            $pedido->recalculateTotal();
            $pedido->user_id = $request->user_id;
            $pedido->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'pedido' => $pedido,
                'message' => "Pedido editado com sucesso!",
            ], 200);

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Pedido não editado!",
            ], 400);
        }
    }

    public function destroy(Pedido $pedido) : JsonResponse
    {
        try {
            $pedido->delete();

            return response()->json([
                'status' => true,
                'pedido' => $pedido,
                'message' => "Pedido apagado com sucesso!",
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Pedido não apagado!",
            ], 400);
        }
    }
}

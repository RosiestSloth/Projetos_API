<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PizzaRequest;
use App\Models\Pizza;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
        public function index() : JsonResponse
    {
        // Requisitar os Pizzas
        $Pizzas = Pizza::orderBy('id', 'DESC')->get();
        // Retornar a variável com os valores
        return response()->json([
            'status' => true,
            'Pizzas' => $Pizzas,
        ], 200);
    }

    public function show(Pizza $Pizza) : JsonResponse
    {
        // Retornar a variável com os valores
        return response()->json([
            'status' => true,
            'Pizza' => $Pizza,
        ], 200);
    }

    public function store(PizzaRequest $request) : JsonResponse
    {
        DB::beginTransaction();

        try{

            $Pizza = Pizza::create([
                'name' => $request->name,
                'ingredients' => $request->ingredients,
                'preco_base' => $request->preco_base,
                'tamanho' => $request->tamanho,
                'ingredientes_extras' => $request->ingredientes_extras,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'Pizza' => $Pizza,
                'message' => "Pizza cadastrado com sucesso!",
            ], 201);
            

        }catch (Exception $e) {
            // Operação não concluída

            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Pizza não cadastrado!",
            ], 400);
        }
    }

    public function update(PizzaRequest $request, Pizza $Pizza) : JsonResponse
    {

        DB::beginTransaction();

        try {

            $Pizza->update([
                'name' => $request->name,
                'ingredients' => $request->ingredients,
                'preco_base' => $request->preco_base,
                'tamanho' => $request->tamanho,
                'ingredientes_extras' => $request->ingredientes_extras,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'pizza' => $Pizza,
                'message' => "Pizza editado com sucesso!",
            ], 200);

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Pizza não editado!",
            ], 400);
        }

        return response()->json([
                'status' => true,
                'Pizza' => $request,
                'message' => "Pizza editado com sucesso!",
            ], 200);
    }

    public function destroy(Pizza $Pizza) : JsonResponse
    {
        try {

            $Pizza->delete();

            return response()->json([
                'status' => true,
                'Pizza' => $Pizza,
                'message' => "Pizza apagado com sucesso!",
            ], 200);

        } catch(Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "Pizza não apagado!",
            ], 400);
        }
    }
}

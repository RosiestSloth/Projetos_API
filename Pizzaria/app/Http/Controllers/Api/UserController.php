<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() : JsonResponse
    {
        // Requisitar os usuários
        $users = User::orderBy('id', 'DESC')->get();
        // Retornar a variável com os valores
        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }

    public function show(User $user) : JsonResponse
    {
        // Retornar a variável com os valores
        return response()->json([
            'status' => true,
            'user' => $user,
        ], 200);
    }

    public function store(UserRequest $request) : JsonResponse
    {
        DB::beginTransaction();

        try{

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'user' => $user,
                'message' => "Usuário cadastrado com sucesso!",
            ], 201);
            

        }catch (Exception $e) {
            // Operação não concluída

            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Usuário não cadastrado!",
            ], 400);
        }
    }

    public function update(UserRequest $request) : JsonResponse
    {
        return response()->json([
                'status' => true,
                'user' => $request,
                'message' => "Usuário editado com sucesso!",
            ], 200);
    }
}

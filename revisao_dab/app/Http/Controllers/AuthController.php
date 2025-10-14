<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {

        return response()->json([
            'status' => true,
            'message' => Geral::USUARIO_LOGADO,
            'usuario' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return ['status' => true, 'message' => Geral::USUARIO_DESLOGADO];
    }
}

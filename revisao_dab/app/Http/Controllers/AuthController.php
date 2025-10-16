<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::guard('web')->attempt($credentials)) {
            return response()->json([
                'status' => false,
                'message' => Geral::USUARIO_INCORRETO,
            ], 401);
        }

        $user = Auth::guard('web')->user();

        // Ensure we have a User model instance; fall back to fetching by email when necessary
        if (!($user instanceof User)) {
            $email = $credentials['email'] ?? $request->input('email');
            $user = User::where('email', $email)->first();
        }

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => Geral::USUARIO_INCORRETO,
            ], 401);
        }

        // Verify token creation method exists (Sanctum installed)
        if (!method_exists($user, 'createToken')) {
            return response()->json([
                'status' => false,
                'message' => 'Token generation unavailable: check Laravel Sanctum or User model.',
            ], 500);
        }

        try {
            // createToken returns an instance of NewAccessToken; use plainTextToken for the client
            $token = $user->createToken('api_token')->plainTextToken;
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erro ao criar token: ' . $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => Geral::USUARIO_LOGADO,
            'usuario' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        // Try to revoke token sent via Authorization: Bearer <token>
        $authHeader = $request->header('Authorization');
        if ($authHeader && preg_match('/Bearer\s+(.*)$/i', $authHeader, $matches)) {
            $plainToken = $matches[1];
            $tokenModel = PersonalAccessToken::findToken($plainToken);
            if ($tokenModel) {
                $tokenModel->delete();
                return ['status' => true, 'message' => Geral::USUARIO_DESLOGADO];
            }
        }

        // Fallback to currentAccessToken (cookie/session based)
        $current = $request->user() ? $request->user()->currentAccessToken() : null;
        if ($current) {
            $current->delete();
            return ['status' => true, 'message' => Geral::USUARIO_DESLOGADO];
        }

        return ['status' => false, 'message' => 'Nenhum token ativo encontrado para revogação.'];
    }
}

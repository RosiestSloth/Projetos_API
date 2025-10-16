<?php

namespace App\Rules;

use App\Constants\Geral;
use Illuminate\Support\Facades\Auth;
use App\Models\TipoUsuario;

class UsuarioRule
{
    private function currentUser()
    {
        // Prefer user from the current request (Sanctum token)
        $reqUser = request() ? request()->user() : null;
        if ($reqUser) return $reqUser;

        // Fallbacks
        $sanctum = \Illuminate\Support\Facades\Auth::guard('sanctum')->user();
        if ($sanctum) return $sanctum;

        return \Illuminate\Support\Facades\Auth::user();
    }

    public function isProprietario()
    {
        $user = $this->currentUser();
        $isProprietario = false;
        if ($user) {
            $propId = TipoUsuario::where('tipo', 'Proprietário')->value('id') ?? 2;
            $isProprietario = ((int)$user->tipo_usuario_id === (int)$propId) || (optional($user->tipo)->tipo === 'Proprietário');
        }

        if($isProprietario == false){
            $this->failedAuthorization();
        }

        return $isProprietario;
    }

    public function isAdmin()
    {
        $user = $this->currentUser();
    $adminId = TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
    $isAdmin = $user && (((int)$user->tipo_usuario_id === (int)$adminId) || (optional($user->tipo)->tipo === 'Admin'));

        if ($isAdmin == false) {
            $this->failedAuthorization();
        }

        return $isAdmin;
    }

    private function failedAuthorization()
    {
        $message = Geral::USUARIO_SEM_PERMISSAO;
        abort(403, $message);
    }
}

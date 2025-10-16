<?php

namespace App\Http\Controllers;

use App\Constants\Geral;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Rules\UsuarioRule;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        // Apenas ADMIN pode listar todos os usuários
        (new \App\Rules\UsuarioRule())->isAdmin();
        $users = $this->service->list();
        return ['status' => true, 'message' => Geral::USUARIO_ENCONTRADO, 'usuarios' => $users];
    }

    public function me(Request $request)
    {
        $user = $this->service->me($request);
        return ['status' => true, 'message' => Geral::USUARIO_ME, 'usuario' => $user];
    }

    public function create(UserRequest $request)
    {
        // Apenas ADMIN pode cadastrar qualquer usuário (Proprietário ou Inquilino)
        (new UsuarioRule())->isAdmin();

        $user = $this->service->create($request);

        return ['status' => true, 'message' => Geral::USUARIO_CADASTRADO, "usuario" => $user];
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $authUser = $request->user();
        $isSelf = ((int)$authUser->id === (int)$id);
        if (!$isSelf) {
            // Updating someone else requires ADMIN
            (new UsuarioRule())->isAdmin();
        }
        $user = $this->service->update($id, $request->all());
        return ['status' => true, 'message' => 'Usuário atualizado com sucesso!', 'usuario' => $user];
    }

    public function destroy(string $id)
    {
        // ADMIN only for delete
        (new UsuarioRule())->isAdmin();
        $this->service->delete($id);
        return ['status' => true, 'message' => Geral::USUARIO_DELETADO];
    }

    public function show(string $id)
    {
        $user = $this->service->show($id);
        return ['status' => true, 'message' => Geral::USUARIO_ENCONTRADO, 'usuario' => $user];
    }
}

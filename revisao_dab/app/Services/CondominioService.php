<?php

namespace App\Services;

use App\Repositories\CondominioRepository;
use App\Models\TipoUsuario;

class CondominioService
{
    protected $repository;

    public function __construct(CondominioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($request)
    {
        $data = $request->all();
        $userID = $request->user()->id;

        // Normalize field: allow clients to send 'nome' instead of 'condominio'
        if (isset($data['nome']) && !isset($data['condominio'])) {
            $data['condominio'] = $data['nome'];
        }

        // Opcional: reforço de unicidade por segurança de domínio
        // Caso passe daqui sem erro, o Request já validou, mas mantemos uma guarda
        $exists = \App\Models\Condominio::where('condominio', $data['condominio'])
            ->whereNull('deleted_at')
            ->exists();
        if ($exists) {
            abort(422, 'Já existe um condomínio com esse nome.');
        }

        return $this->repository->create($data, $userID);
    }

    public function list($request)
    {
        $userID = $request->user()->id;
        $isAdmin = $this->isAdminUser($request->user());

        return $this->repository->list($userID, $isAdmin);
    }

    public function search($request)
    {
        $userID = $request->user()->id;
        $isProprietario = $request->user() && $request->user()->tipo ? $request->user()->tipo->tipo : null;

        return $this->repository->search($request, $userID, $isProprietario);
    }

    public function show($id)
    {
        return $this->repository->findById($id);
    }

    public function update($id, $data)
    {
        // Normalize: support 'nome' input as 'condominio'
        if (isset($data['nome']) && !isset($data['condominio'])) {
            $data['condominio'] = $data['nome'];
        }
        // Uniqueness guard (ignore current record)
        if (isset($data['condominio'])) {
            $exists = \App\Models\Condominio::where('condominio', $data['condominio'])
                ->whereNull('deleted_at')
                ->where('id', '!=', $id)
                ->exists();
            if ($exists) {
                abort(422, 'Já existe um condomínio com esse nome.');
            }
        }
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    private function isAdminUser($user): bool
    {
        if (!$user) return false;
        $adminId = TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
        return ((int)$user->tipo_usuario_id === (int)$adminId) || (optional($user->tipo)->tipo === 'Admin');
    }
}


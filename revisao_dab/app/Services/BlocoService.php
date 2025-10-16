<?php

namespace App\Services;

use App\Repositories\BlocoRepository;
use App\Rules\BlocoRule;

class BlocoService
{
    protected $repository;
    protected $blocoRule;

    public function __construct(BlocoRepository $repository, BlocoRule $blocoRule)
    {
        $this->repository = $repository;
        $this->blocoRule = $blocoRule;
    }

    public function create($request)
    {
        $data = $request->all();

        $blocoExiste = $this->blocoRule->validaBlocoExiste($data['bloco'], $data['condominio']);

        if(!$blocoExiste){
            return $this->repository->create($data);
        }

        return false;


    }

    public function list($request)
    {
        // Non-aborting admin check: allow non-admins to list their accessible records
        $user = $request->user();
        $adminId = \App\Models\TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
        $isAdmin = $user && (((int)$user->tipo_usuario_id === (int)$adminId) || (optional($user->tipo)->tipo === 'Admin'));
        return $this->repository->list($isAdmin);
    }

    public function update($id, $data)
    {
        // Validate duplicate by name+condominio if provided
        if (isset($data['bloco']) && isset($data['condominio'])) {
            $exists = \App\Models\Bloco::where('bloco', $data['bloco'])
                ->where('condominio_id', $data['condominio'])
                ->where('id', '!=', $id)
                ->whereNull('deleted_at')
                ->exists();
            if ($exists) {
                abort(422, 'Já existe um bloco com esse nome neste condomínio.');
            }
        }
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}


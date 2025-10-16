<?php

namespace App\Services;

use App\Repositories\ApartamentoRepository;
use App\Rules\ApartamentoRule;

class ApartamentoService
{
    protected $repository;
    protected $apartamentoRule;

    public function __construct(ApartamentoRepository $repository, ApartamentoRule $apartamentoRule)
    {
        $this->repository = $repository;
        $this->apartamentoRule = $apartamentoRule;
    }

    public function create($request)
    {
        $data = $request->all();

        // Ensure proprietario is the authenticated user
        if (!isset($data['proprietario']) || empty($data['proprietario'])) {
            $data['proprietario'] = $request->user() ? $request->user()->id : null;
        }

        $apartamento = $this->apartamentoRule->validaApartamentoPorBloco($data['bloco'], $data['numero']);

        if(!$apartamento){
            return $this->repository->create($data);
        }

        return false;
    }

    public function list($request)
    {
        $ownerId = $request->user()->id;
        // Non-aborting admin check
        $user = $request->user();
        $adminId = \App\Models\TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
        $isAdmin = $user && (((int)$user->tipo_usuario_id === (int)$adminId) || (optional($user->tipo)->tipo === 'Admin'));
        if ($isAdmin) {
            return $this->repository->listAll();
        }
        return $this->repository->listByOwner($ownerId);
    }

    public function show($request, $id)
    {
        $ownerId = $request->user()->id;
        $apartamento = $this->repository->findWithRelations($id);
        if (!$apartamento) {
            abort(404, 'Apartamento não encontrado.');
        }
        if ((int)$apartamento->user_proprietario !== (int)$ownerId) {
            abort(403, 'Você não tem permissão para acessar este apartamento.');
        }
        return $apartamento;
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $ownerId = $request->user()->id;
        $apartamento = $this->repository->find($id);
        if (!$apartamento) {
            abort(404, 'Apartamento não encontrado.');
        }
        if ((int)$apartamento->user_proprietario !== (int)$ownerId) {
            abort(403, 'Você não tem permissão para editar este apartamento.');
        }
        return $this->repository->update($id, $data);
    }

    public function delete($request, $id)
    {
        $ownerId = $request->user()->id;
        $apartamento = $this->repository->find($id);
        if (!$apartamento) {
            abort(404, 'Apartamento não encontrado.');
        }
        if ((int)$apartamento->user_proprietario !== (int)$ownerId) {
            abort(403, 'Você não tem permissão para excluir este apartamento.');
        }
        return $this->repository->delete($id);
    }
}


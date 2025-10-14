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

        $apartamento = $this->apartamentoRule->validaApartamentoPorBloco($data['bloco'], $data['numero']);

        if(!$apartamento){
            return $this->repository->create($data);
        }

        return false;
    }

    public function list()
    {
        return $this->repository->list();
    }

    public function update($request, $id)
    {
        $data = $request->all();

        $apartamento = $this->repository->find($id);

        $apartamento->update($data);

        return $apartamento;
    }
}


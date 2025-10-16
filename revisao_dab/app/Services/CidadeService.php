<?php

namespace App\Services;

use App\Repositories\CidadeRepository;

class CidadeService
{
    protected $repository;

    public function __construct(CidadeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function selectPorEstado($request, $codigo_uf)
    {
        $filtros = [
            'nome' => $request->query('nome'),
            'codigo_municipio' => $request->query('codigo_municipio'),
        ];
        return $this->repository->selectPorEstado($codigo_uf, $filtros);
    }
}


<?php

namespace App\Services;

use App\Repositories\EstadoRepository;

class EstadoService
{
    protected $repository;

    public function __construct(EstadoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function select($request)
    {
        $uf = $request->query('sigla');
        $nome = $request->query('nome');

        if ($uf) {
            $estado = $this->repository->findBySigla($uf);
            return $estado ? collect([$estado]) : collect();
        }

        if ($nome) {
            return $this->repository->findByNomeLike($nome);
        }

        return $this->repository->findAll();
    }
}


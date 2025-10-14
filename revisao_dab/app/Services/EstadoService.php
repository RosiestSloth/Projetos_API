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

    public function select()
    {
        return $this->repository->findAll();
    }
}


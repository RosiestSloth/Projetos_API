<?php

namespace App\Services;

use App\Repositories\EnderecoRepository;

class EnderecoService
{
    protected $repository;

    public function __construct(EnderecoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($request)
    {
        $data = $request->all();

        return $this->repository->create($data);
    }
}


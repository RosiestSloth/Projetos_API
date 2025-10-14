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

    public function list()
    {
        return $this->repository->list();
    }
}


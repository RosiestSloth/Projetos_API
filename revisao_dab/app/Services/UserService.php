<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($request)
    {
        $data = $request->all();

        $user = $this->repository->create($data);

        return $user;
    }

    public function me($request)
    {
        $userID = $request->user()->id;

        return $this->repository->findMe($userID);
    }

    public function list()
    {
        return $this->repository->list();
    }

    public function show($id)
    {
        return $this->repository->findById($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}


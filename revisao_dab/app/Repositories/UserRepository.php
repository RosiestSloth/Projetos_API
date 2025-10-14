<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function findMe($userID)
    {
        return User::with('tipo')->where('id', $userID)->get();
    }

    public function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'telefone' => $data['telefone'],
            'email' => strtolower($data['email']),
            'password' => bcrypt($data['password']),
        ]);
    }
}


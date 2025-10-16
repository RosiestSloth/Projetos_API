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
        $tipo = $data['tipo_usuario_id'] ?? 2; // Default: 2 = Proprietário

        $user = User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'telefone' => $data['telefone'],
            'tipo_usuario_id' => $tipo,
            'email' => strtolower($data['email']),
            'password' => bcrypt($data['password']),
        ]);

        return $user->load('tipo');
    }

    public function list()
    {
        return User::with('tipo')->whereNull('deleted_at')->paginate(10);
    }

    public function findById($id)
    {
        return User::with('tipo')->where('id', $id)->whereNull('deleted_at')->firstOrFail();
    }

    public function update($id, $data)
    {
        $user = $this->findById($id);

        // Prevent email collision with other users
        if (isset($data['email'])) {
            $exists = User::where('email', strtolower($data['email']))
                ->where('id', '!=', $user->id)
                ->exists();
            if ($exists) {
                abort(422, 'E-mail já cadastrado.');
            }
            $user->email = strtolower($data['email']);
        }

        if (isset($data['name'])) $user->name = $data['name'];
        if (isset($data['cpf'])) $user->cpf = $data['cpf'];
        if (isset($data['telefone'])) $user->telefone = $data['telefone'];
        if (isset($data['tipo_usuario_id'])) $user->tipo_usuario_id = $data['tipo_usuario_id'];
        if (isset($data['password']) && $data['password']) $user->password = bcrypt($data['password']);

        $user->save();

        return $user->load('tipo');
    }

    public function delete($id)
    {
        $user = $this->findById($id);
        $user->deleted_at = now()->toDateTimeString();
        $user->save();
        return true;
    }
}


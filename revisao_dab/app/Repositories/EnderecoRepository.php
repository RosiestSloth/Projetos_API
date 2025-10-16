<?php

namespace App\Repositories;

use App\Models\Endereco;

class EnderecoRepository
{
    public function create($data)
    {
        return Endereco::create([
            'cep' => $data['cep'],
            'logradouro' => $data['logradouro'],
            'complemento' => $data['complemento'],
            'bairro' => $data['bairro'],
            'cidade_id' => $data['cidade_id']
        ]);

    }

    public function findById($id)
    {
        return Endereco::with('cidade.estado')
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->firstOrFail();
    }
}


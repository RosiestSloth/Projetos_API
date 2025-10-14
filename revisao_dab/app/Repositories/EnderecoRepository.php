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
            'cidade_id' => $data['cidade']
        ]);

    }
}


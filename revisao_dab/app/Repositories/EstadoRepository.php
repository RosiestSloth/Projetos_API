<?php

namespace App\Repositories;

use App\Models\Estado;

class EstadoRepository
{
    public function findAll()
    {
        return Estado::all();
    }

    public function findBySigla(string $uf)
    {
        return Estado::whereRaw('UPPER(uf) = ?', [strtoupper($uf)])->first();
    }

    public function findByNomeLike(string $nome)
    {
        return Estado::where('nome', 'LIKE', "%$nome%")->get();
    }
}


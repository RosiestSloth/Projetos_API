<?php

namespace App\Repositories;

use App\Models\Cidade;

class CidadeRepository
{
    public function selectPorEstado($codigo_uf)
    {
        return Cidade::where('codigo_uf', $codigo_uf)->get();
    }
}


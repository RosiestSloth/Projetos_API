<?php

namespace App\Repositories;

use App\Models\Cidade;

class CidadeRepository
{
    public function selectPorEstado($codigo_uf, $filtros = [])
    {
        $q = Cidade::where('codigo_uf', $codigo_uf);

        if (!empty($filtros['nome'])) {
            $q->where('nome', 'LIKE', '%' . $filtros['nome'] . '%');
        }
        if (!empty($filtros['codigo_municipio'])) {
            $q->where('codigo_municipio', $filtros['codigo_municipio']);
        }

        return $q->get();
    }
}


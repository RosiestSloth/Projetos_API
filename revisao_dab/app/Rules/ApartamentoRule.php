<?php

namespace App\Rules;

use App\Models\Apartamento;

class ApartamentoRule
{
    public function validaApartamentoPorBloco($bloco, $numero)
    {
        return Apartamento::where('bloco_id', $bloco)
            ->where('numero', $numero)
            ->exists();
    }
}

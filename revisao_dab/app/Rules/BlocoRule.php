<?php

namespace App\Rules;

use App\Models\Bloco;

class BlocoRule
{
    public function validaBlocoExiste($bloco, $condominio)
    {
        return Bloco::where('bloco', $bloco)
            ->where('condominio_id', $condominio)
            ->exists();
    }
}

<?php

namespace App\Repositories;

use App\Models\Estado;

class EstadoRepository
{
    public function findAll()
    {
        return Estado::all();
    }
}


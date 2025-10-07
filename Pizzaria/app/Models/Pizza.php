<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{

    protected $fillable = [
        'name',
        'ingredients',
        'preco_base',
        'tamanho',
        'ingredientes_extras',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'ingredientes_extras' => 'array',
    ];

}

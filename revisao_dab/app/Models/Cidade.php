<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo_uf';

    protected $fillable = [
        'codigo_uf',
        'codigo_municipio',
        'nome'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'codigo_uf');
    }
}

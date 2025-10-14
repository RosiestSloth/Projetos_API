<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'bloco',
        'descricao',
        'condominio_id',
        'deleted_at'
    ];

    public function condominio()
    {
        return $this->hasOne(Condominio::class, 'id', 'condominio_id');
    }

    public function apartamento()
    {
        return $this->hasMany(Apartamento::class, 'bloco_id', 'id');
    }
}

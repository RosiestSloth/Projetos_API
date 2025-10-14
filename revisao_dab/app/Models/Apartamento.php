<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'numero',
        'bloco_id',
        'user_morador',
        'user_proprietario'
    ];

    public function bloco()
    {
        return $this->hasOne(Bloco::class, 'id', 'bloco_id');
    }

    public function morador()
    {
        return $this->hasOne(User::class, 'id', 'user_morador');
    }

    public function proprietario()
    {
        return $this->hasOne(User::class, 'id', 'user_proprietario');
    }
}

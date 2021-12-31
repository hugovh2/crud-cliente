<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name',
        'email',
        'endereco',
        'cpf',
        'telefone'
    ];
}

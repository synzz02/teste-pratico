<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome', 'data_nascimento',
    ];

    public function avaliacoes(){
        return $this->hasMany('App\Avaliacao');
    }
}

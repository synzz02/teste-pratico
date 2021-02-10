<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
        'nome', 'data_lancamento',
    ];

    public function avaliacoes(){
        return $this->belongsToMany('App\Avaliacao');
    }

    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }

    public function atores(){
        return $this->belongsToMany('App\Ator');
    }
}

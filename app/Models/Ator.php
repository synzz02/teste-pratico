<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $fillable = [
        'nome', 'data_nascimento',
    ];

    public function filmes(){
        return $this->belongsToMany('App\Filme');
    }
}

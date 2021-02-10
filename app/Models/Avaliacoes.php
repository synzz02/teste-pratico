<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{
    protected $fillable = [
        'nota',
    ];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function filme(){
        return $this->belongsTo('App\Filme');
    }
}

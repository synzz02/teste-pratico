<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Avaliacoes;
use App\Models\Usuario;
use App\Models\Filme;
use App\Http\Controllers\Controller;

class AvaliacoesController extends Controller
{

    // create
    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'numeric',
            'nota' => 'between:0,5'
        ]);
        $usuario = Usuario::findOrFail($request->usuario_id);
        $filme = Filme::findOrFail($request->filme_id);
        $avaliacao = new Avaliacoes;
        $avaliacao->nota = $request->nota;
        $avaliacao->usuario_id = $usuario->id;
        $avaliacao->filme_id = $filme->id;
        $avaliacao->save();
    }
}

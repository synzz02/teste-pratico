<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{

    // get all
    public function index()
    {
        return Usuario::all();
    }

    // create
    public function store(Request $request)
    {
        Usuario::create($request->all());
    }

    // get one
    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    // update
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
    }

    // delete
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
    }
}

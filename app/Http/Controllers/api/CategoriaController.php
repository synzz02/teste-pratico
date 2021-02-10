<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    // get all
    public function index()
    {
        return Categoria::all();
    }

    // create
    public function store(Request $request)
    {
        Categoria::create($request->all());
    }

    // get one
    public function show($id)
    {
        return Categoria::findOrFail($id);
    }

    // update
    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
    }

    // delete
    public function destroy($id)
    {
        $categoria = Usuario::findOrFail($id);
        $categoria->delete();
    }
}

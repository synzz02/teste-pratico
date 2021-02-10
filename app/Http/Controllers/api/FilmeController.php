<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

use App\Models\Filme;
use App\Http\Controllers\Controller;

class FilmeController extends Controller
{

    // get all
    public function index()
    {
        return Filme::all();
    }

    // create
    public function store(Request $request)
    {
        Filme::create($request->all());
    }

    // get one
    public function show($id)
    {
        return Filme::findOrFail($id);
    }

    // update
    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
    }

    // delete
    public function destroy($id)
    {
        $filme = Usuario::findOrFail($id);
        $filme->delete();
    }
}

<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Ator;
use App\Http\Controllers\Controller;

class AtorController extends Controller
{

    // get all
    public function index()
    {
        return Ator::all();
    }

    // create
    public function store(Request $request)
    {
        Ator::create($request->all());
    }

    // get one
    public function show($id)
    {
        return Ator::findOrFail($id);
    }

    // update
    public function update(Request $request, $id)
    {
        $ator = Ator::findOrFail($id);
        $ator->update($request->all());
    }

    // delete
    public function destroy($id)
    {
        $ator = Ator::findOrFail($id);
        $ator->delete();
    }
}

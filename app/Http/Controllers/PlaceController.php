<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    // Listar todos os lugares
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }

    // Criar um novo lugar
    public function store(Request $request)
    {
        $place = Place::create($request->all());
        return response()->json($place, 201);
    }

    // Exibir um lugar específico
    public function show($id)
    {
        $place = Place::findOrFail($id);
        return response()->json($place);
    }

    // Atualizar um lugar específico
    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        return response()->json($place);
    }

    // Deletar um lugar específico
    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return response()->json(null, 204);
    }
}

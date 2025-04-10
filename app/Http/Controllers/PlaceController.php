<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    // List all places
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }

    // Create a new place
    public function store(Request $request)
    {
        $place = Place::create($request->all());
        return response()->json($place, 201);
    }

    // Display a specific place
    public function show($id)
    {
        $place = Place::findOrFail($id);
        return response()->json($place);
    }

    // Update a specific place
    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        return response()->json($place);
    }

    // Delete a specific place
    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return response()->json(null, 204);
    }
}

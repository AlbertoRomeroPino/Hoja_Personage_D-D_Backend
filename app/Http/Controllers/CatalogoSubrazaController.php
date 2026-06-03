<?php

namespace App\Http\Controllers;

use App\Models\CatalogoSubraza;
use Illuminate\Http\Request;

class CatalogoSubrazaController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoSubraza::with('raza')->get());
    }

    public function show($id)
    {
        $subraza = CatalogoSubraza::with('raza')->findOrFail($id);
        return response()->json($subraza);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'raza_id' => 'required|exists:catalogo_razas,id',
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
        ]);

        $subraza = CatalogoSubraza::create($validated);
        return response()->json($subraza, 201);
    }

    public function update(Request $request, $id)
    {
        $subraza = CatalogoSubraza::findOrFail($id);

        $validated = $request->validate([
            'raza_id' => 'sometimes|exists:catalogo_razas,id',
            'nombre' => 'sometimes|string',
            'descripcion' => 'nullable|string',
        ]);

        $subraza->update($validated);
        return response()->json($subraza);
    }

    public function destroy($id)
    {
        $subraza = CatalogoSubraza::findOrFail($id);
        $subraza->delete();
        return response()->json(['message' => 'Subraza eliminada']);
    }
}

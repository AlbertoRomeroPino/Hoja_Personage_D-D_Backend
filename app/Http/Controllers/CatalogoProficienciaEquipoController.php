<?php

namespace App\Http\Controllers;

use App\Models\CatalogoProficienciaEquipo;
use Illuminate\Http\Request;

class CatalogoProficienciaEquipoController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoProficienciaEquipo::all());
    }

    public function show($id)
    {
        $proficiencia = CatalogoProficienciaEquipo::with('personajes')->findOrFail($id);
        return response()->json($proficiencia);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:catalogo_proficiencias_equipo',
            'tipo' => 'required|in:arma,armadura,herramienta',
            'descripcion' => 'nullable|string',
        ]);

        $proficiencia = CatalogoProficienciaEquipo::create($validated);
        return response()->json($proficiencia, 201);
    }

    public function update(Request $request, $id)
    {
        $proficiencia = CatalogoProficienciaEquipo::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:catalogo_proficiencias_equipo,nombre,' . $id,
            'tipo' => 'sometimes|in:arma,armadura,herramienta',
            'descripcion' => 'nullable|string',
        ]);

        $proficiencia->update($validated);
        return response()->json($proficiencia);
    }

    public function destroy($id)
    {
        $proficiencia = CatalogoProficienciaEquipo::findOrFail($id);
        $proficiencia->delete();
        return response()->json(['message' => 'Proficiencia eliminada']);
    }
}

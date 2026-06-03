<?php

namespace App\Http\Controllers;

use App\Models\BitacoraPartida;
use Illuminate\Http\Request;

class BitacoraPartidaController extends Controller
{
    public function index()
    {
        return response()->json(BitacoraPartida::with(['partida', 'personaje'])->latest()->get());
    }

    public function show($id)
    {
        $bitacora = BitacoraPartida::with(['partida', 'personaje'])->findOrFail($id);
        return response()->json($bitacora);
    }

    public function porPartida($partida_id)
    {
        $bitacoras = BitacoraPartida::where('partida_id', $partida_id)
            ->with(['partida', 'personaje'])
            ->latest()
            ->get();
        return response()->json($bitacoras);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'partida_id' => 'required|exists:partidas,id',
            'personaje_id' => 'nullable|exists:personajes,id',
            'accion' => 'required|string|max:100',
            'resultado' => 'required|string',
        ]);

        $bitacora = BitacoraPartida::create($validated);
        return response()->json($bitacora, 201);
    }

    public function update(Request $request, $id)
    {
        $bitacora = BitacoraPartida::findOrFail($id);

        $validated = $request->validate([
            'accion' => 'sometimes|string|max:100',
            'resultado' => 'sometimes|string',
        ]);

        $bitacora->update($validated);
        return response()->json($bitacora);
    }

    public function destroy($id)
    {
        $bitacora = BitacoraPartida::findOrFail($id);
        $bitacora->delete();
        return response()->json(['message' => 'Entrada de bitácora eliminada']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenciaHabilidadSeeder extends Seeder
{
    public function run(): void
    {
        $boboboId = DB::table('personajes')->where('nombre', 'Bobobo-Bo Bo-bobo')->value('id');
        $buzzId = DB::table('personajes')->where('nombre', 'Buzz')->value('id');

        $skills = DB::table('catalogo_habilidades')
            ->whereIn('nombre', ['Atletismo', 'Perspicacia', 'Medicina', 'Naturaleza', 'Persuasión', 'Religión', 'Trato con animales'])
            ->pluck('id', 'nombre');

        $entries = [];

        if ($boboboId) {
            foreach (['Atletismo', 'Perspicacia'] as $skillName) {
                if (isset($skills[$skillName])) {
                    $entries[] = ['personaje_id' => $boboboId, 'habilidad_id' => $skills[$skillName], 'es_competente' => true, 'es_experto' => false];
                }
            }
        }

        if ($buzzId) {
            foreach (['Medicina', 'Naturaleza', 'Persuasión', 'Religión', 'Trato con animales'] as $skillName) {
                if (isset($skills[$skillName])) {
                    $entries[] = ['personaje_id' => $buzzId, 'habilidad_id' => $skills[$skillName], 'es_competente' => true, 'es_experto' => false];
                }
            }
        }

        foreach ($entries as $entry) {
            DB::table('competencias_habilidades')->updateOrInsert([
                'personaje_id' => $entry['personaje_id'],
                'habilidad_id' => $entry['habilidad_id'],
            ], $entry);
        }
    }
}

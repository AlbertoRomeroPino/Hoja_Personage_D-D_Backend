<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConjuroConocidoSeeder extends Seeder
{
    public function run(): void
    {
        $boboboId = DB::table('personajes')->where('nombre', 'Bobobo-Bo Bo-bobo')->value('id');
        $buzzId = DB::table('personajes')->where('nombre', 'Buzz')->value('id');

        $spellNames = [
            'Taumaturgia',
            'Mensaje',
            'Represion infernal',
            'Risa orrible de dasha',
            'Imagen silenciosa',
            'Sirviente invisible (Dante)',
            'Oscuridad',
            'Infectación',
            'Rociada venenosa',
            'Guia',
            'Crear veneno',
            'Detectar venenos y enfermedades',
            'Encantar animales',
            'Hablar con los animales',
            'Envenenar arma',
            'Localizar criatura',
            'Invocar bestia',
            'Localizar animales y plantas',
            'Conjurar animales',
            'Cupula de protección',
            'Hablar con las plantas',
            'Insecto gigantes',
            'Dispersion',
            'Plaga de insectos',
        ];

        $spells = DB::table('catalogo_conjuros')->whereIn('nombre', $spellNames)->pluck('id', 'nombre');
        $timestamp = Carbon::now();

        $boboboSpells = ['Taumaturgia', 'Mensaje', 'Represion infernal', 'Risa orrible de dasha', 'Imagen silenciosa', 'Sirviente invisible (Dante)', 'Oscuridad'];
        $buzzSpells = ['Infectación', 'Rociada venenosa', 'Guia', 'Crear veneno', 'Detectar venenos y enfermedades', 'Encantar animales', 'Hablar con los animales', 'Envenenar arma', 'Localizar criatura', 'Invocar bestia', 'Localizar animales y plantas', 'Conjurar animales', 'Cupula de protección', 'Hablar con las plantas', 'Insecto gigantes', 'Dispersion', 'Plaga de insectos'];

        foreach ($boboboSpells as $spellName) {
            if ($boboboId && isset($spells[$spellName])) {
                DB::table('conjuros_conocidos')->updateOrInsert([
                    'personaje_id' => $boboboId,
                    'conjuro_id' => $spells[$spellName],
                ], [
                    'personaje_id' => $boboboId,
                    'conjuro_id' => $spells[$spellName],
                    'preparado' => true,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
            }
        }

        foreach ($buzzSpells as $spellName) {
            if ($buzzId && isset($spells[$spellName])) {
                DB::table('conjuros_conocidos')->updateOrInsert([
                    'personaje_id' => $buzzId,
                    'conjuro_id' => $spells[$spellName],
                ], [
                    'personaje_id' => $buzzId,
                    'conjuro_id' => $spells[$spellName],
                    'preparado' => true,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
            }
        }
    }
}

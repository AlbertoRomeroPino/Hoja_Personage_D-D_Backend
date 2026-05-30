<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoTransfondoSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_transfondos')->upsert([
            ['nombre' => 'Sabio', 'descripcion' => 'Estudioso dedicado a la investigación y el conocimiento.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Criminal', 'descripcion' => 'Conoce los bajos fondos y las reglas de la calle.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Héroe del Pueblo', 'descripcion' => 'Protege a los débiles y lucha por la justicia popular.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Noble', 'descripcion' => 'Acostumbrado al privilegio y la etiqueta social.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Artista', 'descripcion' => 'Vive para la creatividad y la expresión artística.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Ermitaño', 'descripcion' => 'Encuentra sabiduría en el retiro y la soledad.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['descripcion', 'created_at', 'updated_at']);
    }
}

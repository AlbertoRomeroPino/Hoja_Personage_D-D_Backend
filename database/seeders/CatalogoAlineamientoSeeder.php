<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoAlineamientoSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_alineamientos')->upsert([
            ['nombre' => 'Legal Bueno', 'descripcion' => 'Actúa con honor y protege a los inocentes.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Neutral Bueno', 'descripcion' => 'Busca el bien sin atarse a la ley.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Caótico Bueno', 'descripcion' => 'Ayuda a los demás siguiendo su propia conciencia.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Legal Neutral', 'descripcion' => 'Valora el orden y la justicia por encima de todo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Neutral', 'descripcion' => 'Mantiene el equilibrio entre las fuerzas.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Caótico Neutral', 'descripcion' => 'Vive según su libertad personal.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Legal Malvado', 'descripcion' => 'Usa la ley para oprimir a los demás.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Neutral Malvado', 'descripcion' => 'Persigue su propio interés sin escrúpulos.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Caótico Malvado', 'descripcion' => 'Revela su malicia con acciones impredecibles.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['descripcion', 'created_at', 'updated_at']);
    }
}

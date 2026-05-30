<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoConjuroSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_conjuros')->upsert([
            ['nombre' => 'Taumaturgia', 'nivel' => 0, 'escuela' => 'Transmutación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Produce efectos menores de energía sobrenatural.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Mensaje', 'nivel' => 0, 'escuela' => 'Transmutación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Envía un mensaje corto a una criatura cercana.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Represion infernal', 'nivel' => 1, 'escuela' => 'Evocación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Imprime una fuerza oscura sobre un objetivo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Risa orrible de dasha', 'nivel' => 1, 'escuela' => 'Encantamiento', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Provoca risa histérica en criaturas cercanas.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Imagen silenciosa', 'nivel' => 1, 'escuela' => 'Ilusión', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Crea una imagen visible silenciosa.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Sirviente invisible (Dante)', 'nivel' => 1, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Invoca un sirviente invisible que realiza tareas simples.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Oscuridad', 'nivel' => 2, 'escuela' => 'Nigromancia', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Crea una zona de oscuridad mágica.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Infectación', 'nivel' => 0, 'escuela' => 'Nigromancia', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Inflige una sensación de enfermedad a un objetivo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Rociada venenosa', 'nivel' => 0, 'escuela' => 'Transmutación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Dispara una nube de veneno leve.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Guia', 'nivel' => 0, 'escuela' => 'Adivinación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Aumenta la precisión y habilidades de un aliado.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Crear veneno', 'nivel' => 1, 'escuela' => 'Nigromancia', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Crea veneno sobre un arma o superficie.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Detectar venenos y enfermedades', 'nivel' => 1, 'escuela' => 'Adivinación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Detecta toxinas y enfermedades en un objetivo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Encantar animales', 'nivel' => 1, 'escuela' => 'Encantamiento', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Hace que un animal te vea como amigo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Hablar con los animales', 'nivel' => 1, 'escuela' => 'Adivinación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Permite comunicarte con animales.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Envenenar arma', 'nivel' => 2, 'escuela' => 'Nigromancia', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Cubre un arma con veneno mortal.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Localizar criatura', 'nivel' => 2, 'escuela' => 'Adivinación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Localiza a una criatura específica a distancia.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Invocar bestia', 'nivel' => 2, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Invoca una bestia para ayudarte en combate.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Localizar animales y plantas', 'nivel' => 2, 'escuela' => 'Adivinación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Encuentra animales o plantas específicos.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Conjurar animales', 'nivel' => 3, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Invoca criaturas animales para luchar a tu lado.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Cupula de protección', 'nivel' => 3, 'escuela' => 'Abjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Crea una cúpula protectora que bloquea ataques externos.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Hablar con las plantas', 'nivel' => 3, 'escuela' => 'Transmutación', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Permite comunicarte con plantas conscientes.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Insecto gigantes', 'nivel' => 4, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Convoca un insecto enorme para luchar a tu lado.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Dispersion', 'nivel' => 5, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Dispersa una nube de insectos dañinos.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Plaga de insectos', 'nivel' => 5, 'escuela' => 'Conjuración', 'tiempo_lanzamiento' => '1 acción', 'descripcion' => 'Crea una plaga de insectos que ataca una zona.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['nivel', 'escuela', 'tiempo_lanzamiento', 'descripcion', 'created_at', 'updated_at']);
    }
}

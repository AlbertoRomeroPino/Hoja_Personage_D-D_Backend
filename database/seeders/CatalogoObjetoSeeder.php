<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoObjetoSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_objetos')->upsert([
            ['nombre' => 'Bo (De Bobobo)', 'tipo' => 'Arma', 'peso' => 4.0, 'daño' => 'D10 contundente', 'descripcion' => 'El arma icónica de Bobobo con daño contundente.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Mochila (Afro)', 'tipo' => 'Equipo', 'peso' => 5.0, 'daño' => null, 'descripcion' => 'Mochila especial con espacio para el afro.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Cantimplora (Afro)', 'tipo' => 'Equipo', 'peso' => 1.0, 'daño' => null, 'descripcion' => 'Cantimplora de Bobobo, siempre lista para viajar.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Mechero', 'tipo' => 'Equipo', 'peso' => 0.5, 'daño' => null, 'descripcion' => 'Encendedor pequeño para fuego rápido.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Utensilios de cocina', 'tipo' => 'Equipo', 'peso' => 2.0, 'daño' => null, 'descripcion' => 'Herramientas para preparar alimentos en el campamento.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => '10 Antorchas', 'tipo' => 'Equipo', 'peso' => 3.0, 'daño' => null, 'descripcion' => 'Pack de diez antorchas para iluminar el camino.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Ración de comida para 10 días', 'tipo' => 'Consumible', 'peso' => 10.0, 'daño' => null, 'descripcion' => 'Suficiente comida para diez días de viaje.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Cuerda de 40 Pies', 'tipo' => 'Equipo', 'peso' => 5.0, 'daño' => null, 'descripcion' => 'Cuerda resistente de cuarenta pies de longitud.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Kit de disfraces', 'tipo' => 'Equipo', 'peso' => 3.0, 'daño' => null, 'descripcion' => 'Ropa y accesorios para cambiar de apariencia fácilmente.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Lanza', 'tipo' => 'Arma', 'peso' => 3.5, 'daño' => 'D6 perforante', 'descripcion' => 'Lanza druidica para combates cuerpo a cuerpo.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Escudo +2CA', 'tipo' => 'Armadura', 'peso' => 6.0, 'daño' => null, 'descripcion' => 'Escudo que otorga +2 a la clase de armadura.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Cota de malla 13CA', 'tipo' => 'Armadura', 'peso' => 13.0, 'daño' => null, 'descripcion' => 'Cota de malla que protege con CA 13.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Mochila', 'tipo' => 'Equipo', 'peso' => 5.0, 'daño' => null, 'descripcion' => 'Mochila de viaje estándar.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Petate', 'tipo' => 'Equipo', 'peso' => 4.0, 'daño' => null, 'descripcion' => 'Petate para dormir durante las acampadas.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Yesquero', 'tipo' => 'Equipo', 'peso' => 0.5, 'daño' => null, 'descripcion' => 'Encendedor portátil para fuego rápido.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Cuerda de cáñamo de 50 Pies', 'tipo' => 'Equipo', 'peso' => 6.0, 'daño' => null, 'descripcion' => 'Cuerda resistente de cincuenta pies.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Canalizador druidico', 'tipo' => 'Equipo', 'peso' => 2.0, 'daño' => null, 'descripcion' => 'Herramienta druidica que canaliza energía natural.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Suministro de alquimista', 'tipo' => 'Equipo', 'peso' => 8.0, 'daño' => null, 'descripcion' => 'Kit con ingredientes y utensilios alquímicos.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['tipo', 'peso', 'daño', 'descripcion', 'created_at', 'updated_at']);
    }
}

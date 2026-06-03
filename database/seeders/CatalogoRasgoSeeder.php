<?php

namespace Database\Seeders;

use App\Models\CatalogoRasgo;
use Illuminate\Database\Seeder;

class CatalogoRasgoSeeder extends Seeder
{
    public function run(): void
    {
        $rasgos = [
            // Rasgos de Bárbaro
            ['nombre' => 'Ataque Temerario', 'tipo' => 'rasgo', 'descripcion' => 'Ataca recklessly, obteniendo ventaja pero permitiendo ataques de oportunidad con bonificación'],
            // Rasgos de Bardo
            ['nombre' => 'Cura Mágica', 'tipo' => 'rasgo', 'descripcion' => 'Inspira aliados sanando a través de música'],
            // Rasgos de Clérigo
            ['nombre' => 'Siervo de la Fe', 'tipo' => 'rasgo', 'descripcion' => 'Canaliza poder divino'],
            // Dotes generales
            ['nombre' => 'Francotirador', 'tipo' => 'dote', 'descripcion' => 'Aumenta el daño a distancia'],
            ['nombre' => 'Defensor Blindado', 'tipo' => 'dote', 'descripcion' => 'Mejora la defensa con armadura pesada'],
            ['nombre' => 'Bebedor de Magia', 'tipo' => 'dote', 'descripcion' => 'Absorbe energía mágica'],
            ['nombre' => 'Maestría Arcana', 'tipo' => 'dote', 'descripcion' => 'Domina trucos de magia simple'],
            ['nombre' => 'Resilencia Épica', 'tipo' => 'dote', 'descripcion' => 'Resiste mejor a efectos nocivos'],
        ];

        foreach ($rasgos as $rasgo) {
            CatalogoRasgo::create($rasgo);
        }
    }
}

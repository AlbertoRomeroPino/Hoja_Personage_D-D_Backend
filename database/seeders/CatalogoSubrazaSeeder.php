<?php

namespace Database\Seeders;

use App\Models\CatalogoSubraza;
use Illuminate\Database\Seeder;

class CatalogoSubrazaSeeder extends Seeder
{
    public function run(): void
    {
        $subrazas = [
            // Subrazas de Elfo (asumiendo raza_id = 1, ajusta según sea necesario)
            ['raza_id' => 1, 'nombre' => 'Alto Elfo', 'descripcion' => 'Talentoso en magia'],
            ['raza_id' => 1, 'nombre' => 'Elfo de los Bosques', 'descripcion' => 'Rápido y sigiloso'],
            ['raza_id' => 1, 'nombre' => 'Drow', 'descripcion' => 'Elfo oscuro de las profundidades'],

            // Subrazas de Enano (asumiendo raza_id = 2)
            ['raza_id' => 2, 'nombre' => 'Enano de Montaña', 'descripcion' => 'Experto en armadura pesada'],
            ['raza_id' => 2, 'nombre' => 'Enano de Colina', 'descripcion' => 'Resistente y duradero'],

            // Subrazas de Humano (asumiendo raza_id = 3)
            ['raza_id' => 3, 'nombre' => 'Humano Variante', 'descripcion' => 'Versátil y adaptable'],

            // Subrazas de Mediano (asumiendo raza_id = 4)
            ['raza_id' => 4, 'nombre' => 'Mediano Pies Ligeros', 'descripcion' => 'Muy ágil'],
            ['raza_id' => 4, 'nombre' => 'Mediano Robusto', 'descripcion' => 'Resistente al veneno'],
        ];

        foreach ($subrazas as $subraza) {
            CatalogoSubraza::create($subraza);
        }
    }
}

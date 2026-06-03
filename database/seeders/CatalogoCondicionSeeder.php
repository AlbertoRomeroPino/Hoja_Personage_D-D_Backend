<?php

namespace Database\Seeders;

use App\Models\CatalogoCondicion;
use Illuminate\Database\Seeder;

class CatalogoCondicionSeeder extends Seeder
{
    public function run(): void
    {
        $condiciones = [
            ['nombre' => 'En Furia', 'descripcion' => 'Enrage mode activado'],
            ['nombre' => 'Envenenado', 'descripcion' => 'Sufre efecto de veneno'],
            ['nombre' => 'Bendecido', 'descripcion' => 'Beneficiado por bendición divina'],
            ['nombre' => 'Maldito', 'descripcion' => 'Bajo efecto de maldición'],
            ['nombre' => 'Paralizado', 'descripcion' => 'No puede moverse ni atacar'],
            ['nombre' => 'Cegado', 'descripcion' => 'No puede ver'],
            ['nombre' => 'Asustado', 'descripcion' => 'Sufre de miedo'],
            ['nombre' => 'Invisible', 'descripcion' => 'Invisible a los ojos'],
            ['nombre' => 'Quemado', 'descripcion' => 'Sufriendo daño de fuego'],
            ['nombre' => 'Congelado', 'descripcion' => 'Bajo efecto de frío extremo'],
        ];

        foreach ($condiciones as $condicion) {
            CatalogoCondicion::create($condicion);
        }
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonajeSeeder extends Seeder
{
    public function run(): void
    {
        $userId = DB::table('users')->where('email', 'alberto@example.com')->value('id');

        if (! $userId) {
            return;
        }

        $alineamientoCaoticoBueno = DB::table('catalogo_alineamientos')->where('nombre', 'Caótico Bueno')->value('id');
        $alineamientoNeutral = DB::table('catalogo_alineamientos')->where('nombre', 'Neutral')->value('id');
        $razaTiflin = DB::table('catalogo_razas')->where('nombre', 'Tiflin')->value('id');
        $razaVespois = DB::table('catalogo_razas')->where('nombre', 'Vespois')->value('id');
        $transfondoArtista = DB::table('catalogo_transfondos')->where('nombre', 'Artista')->value('id');
        $transfondoErmitano = DB::table('catalogo_transfondos')->where('nombre', 'Ermitaño')->value('id');

        if (! $alineamientoCaoticoBueno || ! $alineamientoNeutral || ! $razaTiflin || ! $razaVespois || ! $transfondoArtista || ! $transfondoErmitano) {
            return;
        }

        $timestamp = Carbon::now();

        DB::table('personajes')->updateOrInsert([
            'nombre' => 'Bobobo-Bo Bo-bobo',
        ], [
            'user_id' => $userId,
            'clase' => 'Monje-Bardo',
            'nivel' => null,
            'alineamiento_id' => $alineamientoCaoticoBueno,
            'raza_id' => $razaTiflin,
            'transfondo_id' => $transfondoArtista,
            'puntos_experiencia' => 0,
            'pg_maximos' => 35,
            'pg_actuales' => 35,
            'pg_temporales' => 0,
            'clase_armadura' => 13,
            'velocidad' => 30,
            'dados_golpe_total' => 'D8',
            'dados_golpe_disponibles' => 1,
            'rasgos_personalidad' => 'Prometí defender a todo el que corra peligro de ser rapado contra su voluntad. Mi cabello es símbolo de libertad; si alguien lo desprecia, se convierte en mi enemigo.',
            'ideales' => 'Adoro mi frondoso afro. Mis gafas negras (tengo 27 escondidas por el cuerpo).',
            'vinculos' => 'No puedo resistirme a hacer una tontería aunque la situación sea mortalmente seria.',
            'defectos' => 'Me tomo cualquier ataque al cabello como algo personal e imperdonable.',
            'monedas_cobre' => 0,
            'monedas_plata' => 0,
            'monedas_oro' => 0,
            'monedas_platino' => 0,
            'notas_equipo' => 'Guerrero de espíritu libre. Su bo es su compañero inseparable, y sus gafas negras son su marca personal. Siempre atento a defender la libertad.',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);

        DB::table('personajes')->updateOrInsert([
            'nombre' => 'Buzz',
        ], [
            'user_id' => $userId,
            'clase' => 'Druida',
            'nivel' => 9,
            'alineamiento_id' => $alineamientoNeutral,
            'raza_id' => $razaVespois,
            'transfondo_id' => $transfondoErmitano,
            'puntos_experiencia' => 0,
            'pg_maximos' => 35,
            'pg_actuales' => 35,
            'pg_temporales' => 0,
            'clase_armadura' => 11,
            'velocidad' => 30,
            'dados_golpe_total' => 'D8',
            'dados_golpe_disponibles' => 1,
            'rasgos_personalidad' => 'Dominante y majestuosa: porta su porte con la grandeza de una reina, imponiendo respeto a cuantos la rodean. Altiva: tiene en alta estima a las abejas, considerando a los demás como criaturas de menor valía. Recelosa: guarda siempre cautela en sus tratos, pues la confianza es privilegio que pocos merecen.',
            'ideales' => 'Todo insecto es, en potencia, un digno aliado en la senda del destino. En los arcanos de la alquimia, los humildes insectos revelan su utilidad insigne.',
            'vinculos' => 'Mi colonia de insectos, guardada en mi mochila, es mi tesoro más sagrado. Mi deber es proteger a la colmena y extender su legado por todos los reinos.',
            'defectos' => 'Toda afrenta dirigida hacia mis ilustres camaradas insectos será tomada como vil herejía ante mi augusta presencia.',
            'monedas_cobre' => 0,
            'monedas_plata' => 0,
            'monedas_oro' => 0,
            'monedas_platino' => 0,
            'notas_equipo' => 'Druida majestosa que viaja con su sagrada colonia de insectos. Protectora de la naturaleza y aliada de todos los insectos. Su lanza ha sido bendecida por los arcanos de la tierra.',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);
    }
}

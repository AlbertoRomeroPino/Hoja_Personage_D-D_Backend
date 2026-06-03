<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            // Eliminar columnas que ahora se gestionan vía clase_personaje
            $table->dropColumn(['clase', 'nivel']);
        });
    }

    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->string('clase', 100)->nullable()->after('nombre');
            $table->integer('nivel')->nullable()->after('clase');
        });
    }
};

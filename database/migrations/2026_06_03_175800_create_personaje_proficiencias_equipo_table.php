<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proficiencia_personaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->foreignId('proficiencia_id')
                ->constrained('catalogo_proficiencias_equipo')
                ->onDelete('cascade');
            $table->timestamps();

            $table->unique(['personaje_id', 'proficiencia_id'], 'prof_pers_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proficiencia_personaje');
    }
};

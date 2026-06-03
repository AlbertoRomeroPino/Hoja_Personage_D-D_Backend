<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('condicion_personaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->foreignId('condicion_id')
                ->constrained('catalogo_condiciones')
                ->onDelete('cascade');
            $table->integer('turnos_restantes')->nullable();
            $table->timestamps();

            // Índice único para evitar duplicados: un personaje no puede tener la misma condición dos veces
            $table->unique(['personaje_id', 'condicion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condicion_personaje');
    }
};

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
        Schema::create('partida_jugadores', function (Blueprint $table) {
            $table->id();

            // 1. ¿En qué partida es este asiento?
            $table->foreignId('partida_id')
                  ->constrained('partidas')
                  ->cascadeOnDelete();

            // 2. ¿Qué jugador ocupa este asiento?
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // 3. ¿Qué hoja de personaje tiene asignada? (Puede entrar a la sala sin él)
            $table->foreignId('personaje_id')
                  ->nullable()
                  ->constrained('personajes')
                  ->nullOnDelete();

            $table->timestamps();

            // Regla de seguridad: Un jugador no puede ocupar dos asientos en la misma partida
            $table->unique(['partida_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partida_jugadores');
    }
};

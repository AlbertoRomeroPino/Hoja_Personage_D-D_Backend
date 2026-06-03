<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bitacora_partidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partida_id')
                ->constrained('partidas')
                ->onDelete('cascade');
            $table->foreignId('personaje_id')
                ->nullable()
                ->constrained('personajes')
                ->onDelete('set null');
            $table->string('accion', 100); // 'ataque', 'defensa', 'hechizo', 'curación', etc.
            $table->text('resultado'); // Detalles del resultado
            $table->timestamps();

            // Índices para consultas rápidas (evita lag en frontend)
            $table->index('partida_id');
            $table->index('created_at');
            $table->index('personaje_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bitacora_partidas');
    }
};

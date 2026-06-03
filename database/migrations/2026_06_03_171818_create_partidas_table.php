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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->string('codigo_invitacion', 20)->unique();

            // El campo JSON para las reglas de la Sesión Cero (razas capadas, nivel, etc.)
            $table->json('restricciones')->nullable();

            // Conexión al creador de la sala (El Game Master)
            $table->foreignId('master_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};

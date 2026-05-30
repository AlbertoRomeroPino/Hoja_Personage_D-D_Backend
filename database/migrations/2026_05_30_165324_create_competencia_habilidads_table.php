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
        Schema::create('competencias_habilidades', function (Blueprint $table) {
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->cascadeOnDelete();
            $table->foreignId('habilidad_id')
                ->constrained('catalogo_habilidades')
                ->cascadeOnDelete();
            $table->boolean('es_competente')->default(false);
            $table->boolean('es_experto')->default(false);
            $table->primary(['personaje_id', 'habilidad_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencia_habilidads');
    }
};

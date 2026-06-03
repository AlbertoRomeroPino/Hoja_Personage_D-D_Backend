<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogo_proficiencias_equipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique(); // "Herramientas de Ladrón", "Armaduras Pesadas", "Espadas Simples"
            $table->enum('tipo', ['arma', 'armadura', 'herramienta']);
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogo_proficiencias_equipo');
    }
};

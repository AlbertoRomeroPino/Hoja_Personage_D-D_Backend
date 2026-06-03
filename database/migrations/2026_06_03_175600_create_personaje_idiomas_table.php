<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personaje_idiomas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->foreignId('idioma_id')
                ->constrained('catalogo_idiomas')
                ->onDelete('cascade');
            $table->timestamps();

            $table->unique(['personaje_id', 'idioma_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personaje_idiomas');
    }
};

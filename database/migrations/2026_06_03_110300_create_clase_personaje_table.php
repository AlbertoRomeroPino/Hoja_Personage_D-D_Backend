<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clase_personaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->foreignId('clase_id')
                ->constrained('catalogo_clases')
                ->onDelete('cascade');
            $table->integer('nivel')->default(1);
            $table->timestamps();

            $table->unique(['personaje_id', 'clase_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clase_personaje');
    }
};

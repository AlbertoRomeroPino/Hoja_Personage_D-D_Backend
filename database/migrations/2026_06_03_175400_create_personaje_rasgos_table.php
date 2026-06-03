<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personaje_rasgos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->foreignId('rasgo_id')
                ->constrained('catalogo_rasgos')
                ->onDelete('cascade');
            $table->timestamps();

            $table->unique(['personaje_id', 'rasgo_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personaje_rasgos');
    }
};

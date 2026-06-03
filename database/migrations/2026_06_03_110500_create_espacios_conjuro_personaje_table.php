<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('espacios_conjuro_personaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->onDelete('cascade');
            $table->integer('nivel_conjuro'); // 0-9 en D&D 5e
            $table->integer('espacios_maximos');
            $table->integer('espacios_gastados')->default(0);
            $table->timestamps();

            // Un personaje no puede tener dos registros del mismo nivel de conjuro
            $table->unique(['personaje_id', 'nivel_conjuro']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('espacios_conjuro_personaje');
    }
};

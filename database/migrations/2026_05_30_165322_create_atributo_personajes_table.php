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
        Schema::create('atributos_personaje', function (Blueprint $table) {
            $table->foreignId('personaje_id')
                ->primary()
                ->constrained('personajes')
                ->cascadeOnDelete();

            $table->integer('fuerza')->default(10);
            $table->integer('destreza')->default(10);
            $table->integer('constitucion')->default(10);
            $table->integer('inteligencia')->default(10);
            $table->integer('sabiduria')->default(10);
            $table->integer('carisma')->default(10);

            $table->boolean('salvacion_fuerza')->default(false);
            $table->boolean('salvacion_destreza')->default(false);
            $table->boolean('salvacion_constitucion')->default(false);
            $table->boolean('salvacion_inteligencia')->default(false);
            $table->boolean('salvacion_sabiduria')->default(false);
            $table->boolean('salvacion_carisma')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atributo_personajes');
    }
};

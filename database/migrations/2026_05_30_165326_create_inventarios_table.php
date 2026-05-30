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
        Schema::create('inventario', function (Blueprint $table) {
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->cascadeOnDelete();
            $table->foreignId('objeto_id')
                ->constrained('catalogo_objetos')
                ->cascadeOnDelete();
            $table->integer('cantidad')->default(1);
            $table->boolean('equipado')->default(false);
            $table->timestamps();
            $table->primary(['personaje_id', 'objeto_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};

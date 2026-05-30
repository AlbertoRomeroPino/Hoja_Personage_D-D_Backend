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
        Schema::create('conjuros_conocidos', function (Blueprint $table) {
            $table->foreignId('personaje_id')
                ->constrained('personajes')
                ->cascadeOnDelete();
            $table->foreignId('conjuro_id')
                ->constrained('catalogo_conjuros')
                ->cascadeOnDelete();
            $table->boolean('preparado')->default(true);
            $table->timestamps();
            $table->primary(['personaje_id', 'conjuro_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjuros_conocidos');
    }
};

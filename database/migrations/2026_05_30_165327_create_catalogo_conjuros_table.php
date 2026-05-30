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
        Schema::create('catalogo_conjuros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->integer('nivel')->default(0);
            $table->string('escuela', 50)->nullable();
            $table->string('tiempo_lanzamiento', 50)->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_conjuros');
    }
};

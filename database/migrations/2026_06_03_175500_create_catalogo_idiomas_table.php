<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogo_idiomas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique(); // Común, Élfico, Enano, Orco, etc.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogo_idiomas');
    }
};

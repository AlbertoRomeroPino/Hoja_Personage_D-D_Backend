<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogo_clases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->string('dado_golpe', 20); // ej: 'd8', 'd10', 'd12'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogo_clases');
    }
};

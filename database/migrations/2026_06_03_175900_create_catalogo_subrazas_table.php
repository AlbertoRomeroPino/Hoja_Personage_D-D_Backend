<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogo_subrazas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('raza_id')
                ->constrained('catalogo_razas')
                ->onDelete('cascade');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->timestamps();

            // Una raza no puede tener dos subrazas con el mismo nombre
            $table->unique(['raza_id', 'nombre']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogo_subrazas');
    }
};

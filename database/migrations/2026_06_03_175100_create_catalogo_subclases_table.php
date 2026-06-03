<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogo_subclases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clase_id')
                ->constrained('catalogo_clases')
                ->onDelete('cascade');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->timestamps();

            // Un personaje no puede tener la misma subclase dos veces
            $table->unique(['clase_id', 'nombre']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogo_subclases');
    }
};

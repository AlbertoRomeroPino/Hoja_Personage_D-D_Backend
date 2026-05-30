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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('nombre', 100);
            $table->string('clase', 100)->nullable();
            $table->integer('nivel')->nullable();
            $table->foreignId('alineamiento_id')
                ->nullable()
                ->constrained('catalogo_alineamientos');
            $table->foreignId('raza_id')
                ->nullable()
                ->constrained('catalogo_razas');
            $table->foreignId('transfondo_id')
                ->nullable()
                ->constrained('catalogo_transfondos');
            $table->integer('puntos_experiencia')->default(0);

            $table->integer('pg_maximos');
            $table->integer('pg_actuales');
            $table->integer('pg_temporales')->default(0);
            $table->integer('clase_armadura')->nullable();
            $table->integer('velocidad')->nullable();
            $table->string('dados_golpe_total', 20)->nullable();
            $table->integer('dados_golpe_disponibles')->nullable();

            $table->text('rasgos_personalidad')->nullable();
            $table->text('ideales')->nullable();
            $table->text('vinculos')->nullable();
            $table->text('defectos')->nullable();

            $table->integer('monedas_cobre')->default(0);
            $table->integer('monedas_plata')->default(0);
            $table->integer('monedas_oro')->default(0);
            $table->integer('monedas_platino')->default(0);
            $table->text('notas_equipo')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};

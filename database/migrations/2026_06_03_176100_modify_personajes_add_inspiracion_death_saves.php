<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->boolean('inspiracion')->default(false)->after('puntos_experiencia');
            $table->integer('exitos_muerte')->default(0)->after('inspiracion'); // 0-3
            $table->integer('fallos_muerte')->default(0)->after('exitos_muerte'); // 0-3
        });
    }

    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->dropColumn(['inspiracion', 'exitos_muerte', 'fallos_muerte']);
        });
    }
};

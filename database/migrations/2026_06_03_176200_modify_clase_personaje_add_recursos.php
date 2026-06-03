<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clase_personaje', function (Blueprint $table) {
            $table->integer('recursos_clase_maximos')->nullable()->after('nivel');
            $table->integer('recursos_clase_actuales')->default(0)->after('recursos_clase_maximos');
        });
    }

    public function down(): void
    {
        Schema::table('clase_personaje', function (Blueprint $table) {
            $table->dropColumn(['recursos_clase_maximos', 'recursos_clase_actuales']);
        });
    }
};

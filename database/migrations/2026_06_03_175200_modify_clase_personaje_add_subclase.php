<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clase_personaje', function (Blueprint $table) {
            $table->foreignId('subclase_id')
                ->nullable()
                ->constrained('catalogo_subclases')
                ->onDelete('set null')
                ->after('clase_id');
        });
    }

    public function down(): void
    {
        Schema::table('clase_personaje', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['subclase_id']);
            $table->dropColumn('subclase_id');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->foreignId('subraza_id')
                ->nullable()
                ->constrained('catalogo_subrazas')
                ->onDelete('set null')
                ->after('raza_id');
        });
    }

    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['subraza_id']);
            $table->dropColumn('subraza_id');
        });
    }
};

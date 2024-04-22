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
        // Eliminar la restricción de clave externa
        Schema::table('portfolio_detail', function (Blueprint $table) {
            $table->dropForeign(['portfolio_id']);
        });

        // Eliminar la columna
        Schema::table('portfolio_detail', function (Blueprint $table) {
            $table->dropColumn('portfolio_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Agregar la columna de nuevo
        Schema::table('portfolio_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('portfolio_id');
        });

        // Volver a agregar la restricción de clave externa
        Schema::table('portfolio_detail', function (Blueprint $table) {
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
        });
    }
};

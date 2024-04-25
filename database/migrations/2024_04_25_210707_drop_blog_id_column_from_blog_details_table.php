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
        Schema::table('blog_details', function (Blueprint $table) {
            $table->dropForeign(['blog_id']);
        });

        // Eliminar la columna
        Schema::table('blog_details', function (Blueprint $table) {
            $table->dropColumn('blog_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Agregar la columna de nuevo
        Schema::table('blog_details', function (Blueprint $table) {
            $table->unsignedBigInteger('blog_id');
        });

        // Volver a agregar la restricción de clave externa
        Schema::table('blog_details', function (Blueprint $table) {
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }
};

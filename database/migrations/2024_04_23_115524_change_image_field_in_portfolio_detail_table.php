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
        Schema::table('portfolio_detail', function (Blueprint $table) {
            // Cambia el tipo de campo de 'image' a TEXT
            $table->text('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio_detail', function (Blueprint $table) {
            // Revierte el cambio, vuelve a colocar el tipo de campo 'image' a VARCHAR(255)
            $table->string('image', 255)->nullable()->change();
        });
    }
};

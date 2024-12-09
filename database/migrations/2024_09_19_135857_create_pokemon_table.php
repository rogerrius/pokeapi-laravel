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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_gen')->nullable();
            $table->string('nom');
            $table->string('descripcio');
            $table->integer('alçada');
            $table->integer('pes');
            $table->integer('hp');
            $table->integer('atac');
            $table->integer('defensa');
            $table->integer('atac_esp');
            $table->integer('defensa_esp');
            $table->integer('velocitat');
            $table->string('sprite');
            $table->string('sprite_shiny');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};

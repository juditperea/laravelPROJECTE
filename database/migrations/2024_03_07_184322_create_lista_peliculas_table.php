<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lista_peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pelicula_id')->constrained('peliculas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('lista_peliculas');
    }
}

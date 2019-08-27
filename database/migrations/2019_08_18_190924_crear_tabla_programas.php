<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProgramas extends Migration
{
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_programa',250);
            $table->integer('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programas');
    }
}

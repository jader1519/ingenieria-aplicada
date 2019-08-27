<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfesores extends Migration
{
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('nombre_profesor',150);
            $table->string('apellido_profesor',150);
            $table->string('profesion',150);
            $table->string('correo_profesor',250);
            $table->integer('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHerramientas extends Migration
{
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_herramienta',250);
            $table->integer('estado');
            $table->timestamps();
        });
    }
public function down()
    {
        Schema::dropIfExists('herramientas');
    }
}

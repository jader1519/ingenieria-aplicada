<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAulas extends Migration
{
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_aula',100);
            $table->integer('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}

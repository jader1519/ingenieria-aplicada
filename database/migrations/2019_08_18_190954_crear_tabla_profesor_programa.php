<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfesorPrograma extends Migration
{
    public function up()
    {
        Schema::create('profesor_programa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profesor_id')->unsigned();
            $table->integer('programa_id')->unsigned();
            $table->integer('estado')->unsigned();
            $table->foreign('profesor_id')->references('id')
            ->on('profesores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('programa_id')->references('id')
            ->on('programas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesor_programa');
    }
}

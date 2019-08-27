<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPrestamos extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_prestamo');
            $table->time('hora_inicial');
            $table->time('hora_fin');
            $table->string('programa',250);
            $table->integer('herramienta_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->string('nombre_estudiante',250)->nullable();
            $table->integer('cedula')->nullable();
            $table->integer('estado')->unsigned();
            $table->foreign('herramienta_id')->references('id')
            ->on('herramientas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('profesor_id')->references('id')
            ->on('profesores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('aula_id')->references('id')
            ->on('aulas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}

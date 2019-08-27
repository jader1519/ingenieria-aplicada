<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';
    
    protected $fillable = ['fecha_prestamo', 'hora_inicial', 'hora_fin', 'programa', 'herramienta_id', 'profesor_id',
    'aula_id','nombre_estudiante', 'cedula', 'estado'];

    public function herramienta()
    {
    	return $this->belongsTo('App\Models\Herramienta');
    }


    public function profesor()
    {
    	return $this->belongsTo('App\Models\Profesor');
    }

    public function aula()
    {
    	return $this->belongsTo('App\Models\Aula');
    }

}

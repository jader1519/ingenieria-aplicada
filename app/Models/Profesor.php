<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    
    protected $fillable = ['cedula', 'nombre_profesor', 'apellido_profesor', 'profesion', 'correo_profesor', 'estado'];

}

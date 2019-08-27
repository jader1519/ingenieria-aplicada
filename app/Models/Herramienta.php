<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table = 'herramientas';
    
    protected $fillable = ['nombre_herramienta', 'estado'];

    public function prestamos()
    {
    	return $this->hasMany('App\Models\Prestamo');
    }

}

<?php

use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    
    public function run()
    {
        //factory(App\Models\Profesor::class, 2)->create();

        factory(App\Models\Herramienta::class, 5)
        ->create()
        ->each( function ($herramienta){
             $herramienta->prestamos()->save(factory(App\Models\Prestamo::class)->make());
        });
    }
}

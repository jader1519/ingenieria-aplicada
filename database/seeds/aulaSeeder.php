<?php

use Illuminate\Database\Seeder;
use App\Models\Aula;

class aulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aula::create([
        'id' => 01,
        'nombre_aula' => 'sistemas',
        'estado' => 50

    ]);

    }
}

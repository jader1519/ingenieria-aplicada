<?php

use Illuminate\Database\Seeder;
use\App\Models\Aula;

class aulaFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $aula = factory(App\Models\Aula::class, 2)->create();
    }
}

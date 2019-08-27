<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         //$this->call(aulaSeeder::class);
         //$this->call(aulaFactory::class);
          $this->call(DatosSeeder::class);

        

    }
}

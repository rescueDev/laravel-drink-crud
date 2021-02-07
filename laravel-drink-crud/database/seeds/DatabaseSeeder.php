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
        $this->call([
            BottleSeeder::class, //faccio il seeder prima sempre della      tabella senza foreign key
            DrinkSeeder::class,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Drink;
use App\Bottle;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Drink::class, 20)
            ->make()
            ->each(function ($drink) {
                $bottle = Bottle::inRandomOrder()->first();
                $drink->bottle()->associate($bottle);
                $drink->save();
            });
    }
}

<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i < 10 ; $i++) { 
        $train = new Train();
        $train->company=fake()->words(3, true);
         $train->departure_station=fake()->words(5, true);
         $train->arrival_station=fake()->words(5, true);
         $train->departure_time=fake()->time();
         $train->arrival_time=fake()->time();
         $train->train_code=fake()->currencyCode();
         $train->number_carriages=fake()->numberBetween(1,10);
         $train->in_time=fake()->boolean();
         $train->deleted= fake()->boolean();
         $train->date=fake()->dateTimeInInterval('-2 day', '-1 day');
         $train->save();
        }
    }
}

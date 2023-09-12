<?php

namespace Database\Seeders;


use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();

        for ($i=0; $i < 10 ; $i++) { 
        $train = new Train();
        $train->company=fake()->words(3, true);
        // $train->departure_station='';
        // $train->arrival_station='';
        // $train->departure_time=;
        // $train->arrival_time=;
        // $train->train_code='';
        // $train->number_carriages=;
        // $train->in_time=;
        // $train->deleted=;
        // $train=save();
        }
    }
}

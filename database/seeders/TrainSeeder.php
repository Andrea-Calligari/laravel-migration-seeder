<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $date = $faker->dateTimeBetween('this year');

        for($i = 0; $i < 50; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->station_of_departure = $faker->city();
            $new_train->station_of_arrival = $faker->city();
            $new_train->time_of_arrival= $faker->dateTimeThisMonth();
            $new_train->time_of_departure = $faker->dateTimeThisMonth();
            $new_train->train_code = $faker->bothify('??-######');
            $new_train->number_of_coaches = $faker->randomDigitNot(0,);
            $new_train->on_schedule = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();

            
            
        }
    }
}

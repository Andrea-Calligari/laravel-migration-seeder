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
       

        for($i = 0; $i < 5; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->station_of_departure = $faker->city();
            $new_train->station_of_arrival = $faker->city();
            $new_train->time_of_departure = $faker->dateTimeBetween('-1 week', '-1 week')->format('Y-m-d H:i:s');
            $new_train->time_of_arrival = $faker->dateTimeInInterval( $new_train->time_of_departure, '+2 days')->format('Y-m-d H:i:s');
            $new_train->train_code = $faker->bothify('??-######');
            $new_train->number_of_coaches = $faker->numberBetween(5,10);
            $new_train->on_schedule = $faker->boolean();
            $new_train->cancelled = $new_train->on_schedule ? 0 : $faker->boolean();
            $new_train->save();
        }
    }
}

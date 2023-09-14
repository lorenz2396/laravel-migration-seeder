<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Model
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Train::truncate();

        for($i=0;$i<10;$i++){
            $train = new Train();
            $train -> company = fake()->company();
            $train -> dep_station = fake()->city();
            $train -> arr_station = fake()->city();
            $train -> dep_datetime = fake()->dateTimeBetween('tomorrow','+1 week');
            $train -> arr_datetime = fake()->dateTimeBetween('+2 week','+4 week');
            $train -> train_code = strtoupper(fake()->shuffle(fake()-> bothify('?#?#?#')));
            $train -> train_car_number = rand(2,15);
            $train -> on_time = fake()->boolean(40);
            $train -> deleted = fake()->boolean();
            $train ->save();
        }
        
    }
}

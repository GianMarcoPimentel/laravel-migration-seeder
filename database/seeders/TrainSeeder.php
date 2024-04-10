<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//aggiungo la riga di codice per utilizzare i Faker
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // creo nuova istanza per la classe train (una nuova riga)

        for ($i = 0; $i < 10; $i++) {
        $newTrain = new Train();
        $newTrain->company = $faker->company();
        $newTrain->departured = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->started_time = $faker->dateTimeBetween('-1 week', '+1 week');
        $newTrain->arrival_time = $faker->time('H:i:s' ,'+2 hours');
        $newTrain->train_code = $faker->unique()->numerify('IT######');
        $newTrain->carriage_number = $faker->randomDigitNotNUll();
        $newTrain->on_time = $faker->boolean();
        $newTrain->deleted = $faker->boolean();
        
        // salvo la riga
        $newTrain->save();

        }
        


        
       
    }
}


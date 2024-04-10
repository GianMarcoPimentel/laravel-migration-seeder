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
        // creo nuova istanza per la classe train (una nuova riga)
        $newTrain = new Train();
        $newTrain->company = "TrenItalia";
        $newTrain->departured = "Genova Brignole";
        $newTrain->arrival_station = "Milano Centrale";
        $newTrain->started_time = "08:00:00";
        $newTrain->arrival_time = "12:00:00";
        $newTrain->train_code = "IT696969";
        $newTrain->carriage_number = 10;
        $newTrain->on_time = true;
        $newTrain->deleted = false;
        
        // salvo la riga
        $newTrain->save();
        
       
    }
}


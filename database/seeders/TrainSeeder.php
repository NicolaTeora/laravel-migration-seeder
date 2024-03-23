<?php

/**
 * i seeder servono a popolare la tabella del DB
 */

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//si possono generare dati random importnado utilizzando Faker
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //importo il Faker nella funzione
    public function run(Faker $faker)
    {
        /**
         * 1- instanziare un nuovo esemplare/oggetto
         * 2- passare le caratteristiche definite nel database
         */

        $train = new Train;

        $train->agency = $faker->company();
        $train->departure_station = $faker->city();
        $train->arrival_station = $faker->city();
        $train->departure_time = $faker->date() . " " . $faker->time();
        $train->arrival_time = $faker->date() . " " . $faker->time();
        $train->code_train = $faker->randomNumber(5, true);
        $train->num_carriages = $faker->randomDigit();
        /*
        $train->agency = "Orienta Express";
        $train->departure_station = "Pechino";
        $train->arrival_station = "Vienna";
        $train->departure_time = "00:00:00";
        $train->arrival_time = "23:00:00";
        $train->code_train = "PC999CD";
        $train->num_carriages = 100;
        $train->in_time = true;
        $train->deleted = false;
        */

        /** 
         * 3- salvare la riga
         */
        $train->save();
    }
}

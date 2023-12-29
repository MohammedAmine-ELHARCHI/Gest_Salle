<?php

// SeanceSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SeanceSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        DB::table('seances')->insert([
            'jour' => $faker->date,
            'heurDebut' => $faker->time,
            'heurFin' => $faker->time,
            'idProf' => 2, // Assuming user with id 2 is a professor
            'idSalle' => $faker->numberBetween(1, 10), // Adjust as needed
            'idGroupe' => $faker->numberBetween(1, 10), // Adjust as needed
            'reserved' => $faker->boolean,
        ]);

        // Other seed data for different sessions if needed
    }
}

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

        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        $timeSlots = [
            ['08:30', '10:30'],
            ['10:30', '12:30'],
            ['14:30', '16:30'],
            ['16:30', '18:30']
        ];

        foreach ($days as $day) {
            $randomSlots = $faker->randomElements($timeSlots, 2);
            foreach ($randomSlots as $slot) {
                DB::table('seances')->insert([
                    'jour' => $day,
                    'heurDebut' => $slot[0],
                    'heurFin' => $slot[1],
                    'idProf' => 2, // l'utilisateur par default 
                    'idSalle' => $faker->numberBetween(1, 10), 
                    'idGroupe' => $faker->numberBetween(1, 10), 
                    'reserved' => $faker->boolean,
                    'center' => $faker->randomElement(['Gueliz','Center']),
                ]);
            }
        }
    }
}
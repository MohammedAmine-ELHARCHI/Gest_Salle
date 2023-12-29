<?php

// GroupeEncadreSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GroupeEncadreSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed multiple groupe_encadres
        for ($i = 0; $i < 10; $i++) {
            DB::table('groupe_encadres')->insert([
                'idProf' => 2, // Assuming user with id 2 is a professor
                'idGroup' => $faker->numberBetween(1, 10), // Adjust as needed
            ]);
        }

        // Other seed data for different encadrements if needed
    }
}


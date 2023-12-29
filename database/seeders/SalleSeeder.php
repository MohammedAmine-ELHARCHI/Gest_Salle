<?php

// SalleSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed multiple salles
        for ($i = 0; $i < 10; $i++) {
            DB::table('salles')->insert([
                'libelle' => $faker->unique()->word,
                'centre' => $faker->city,
            ]);
        }

        // Other seed data for different rooms if needed
    }
}

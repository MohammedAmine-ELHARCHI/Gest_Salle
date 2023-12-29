<?php

// GroupeSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GroupeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed multiple groupes
        for ($i = 0; $i < 10; $i++) {
            DB::table('groupes')->insert([
                'GroupeNumber' => $faker->unique()->randomNumber,
                'idAnne' => $faker->numberBetween(1, 5),
                'idFiliere' => $faker->numberBetween(1, 5),
                'email_delegue' => $faker->email,
            ]);
        }

        // Other seed data for different groups if needed
    }
}


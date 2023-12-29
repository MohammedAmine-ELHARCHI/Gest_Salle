<?php

// AnneeFiliereSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class AnneeFiliereSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
        DB::table('annees')->insert([
            'niveau' => $faker->randomElement(['First Year', 'Second Year', 'Third Year']), // Adjust as needed
        ]);

        DB::table('filieres')->insert([
            'nomFiliere' => $faker->sentence(2), // Adjust as needed
        ]);}
        DB::table('users')->insert([
            'id'=>2,
            'name' => "elharchi",
            'prenom' => "mohammed amine",
            'email' => "mohammedamineelharchi@gmail.com",
            'email_verified_at' => now(),
            'matiere'=>'web dev',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        // Other seed data for different years and filieres if needed
    }
}


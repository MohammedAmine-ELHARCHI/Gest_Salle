<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Admin::factory()->create();
         $this->call(SalleSeeder::class);
         $this->call(AnneeFiliereSeeder::class);
         $this->call(GroupeSeeder ::class);
         $this->call(GroupeEncadreSeeder::class);
         $this->call(SeanceSeeder::class);

    }
}

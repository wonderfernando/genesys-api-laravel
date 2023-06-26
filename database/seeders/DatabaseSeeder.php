<?php

namespace Database\Seeders;

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
        //$this->call(CountrySeed::class);
       // $this->call(CitySeed::class);
      //  $this->call(CostumerSeeder::class);
       $this->call(userSeed::class);
        // \App\Models\User::factory(10)->create();
    }
}

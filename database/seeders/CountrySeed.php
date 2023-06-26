<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()->create(["country"=>"Angola"]);    
        Country::factory()->create(["country"=>"Brasil"]);
        Country::factory()->create(["country"=>"Moçambique"]);
        Country::factory()->create(["country"=>"Portugal"]);
    }
}

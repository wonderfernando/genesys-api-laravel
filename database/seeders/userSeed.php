<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create(["phone"=>"926717288",
            "name"=>"Fernando Silva",
            "password"=>bcrypt("password1"), 
            "role"=>0]
        );
       // User::factory(10)->create();
    }
}

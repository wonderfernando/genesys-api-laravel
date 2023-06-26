<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'     => $this->faker->name(),
            'phone'     => $this->faker->unique()->phoneNumber(),
            'bi'      => $this->faker->unique()->phoneNumber(),
            'email'   => $this->faker->unique()->email(),
            'user_id' => random_int(1,3),
            'city_id'    => 1,          
             'gender'  =>"Masculino",
             'photo'   =>'',
            'address' => $this->faker->streetAddress,
             
        ];
    }
}

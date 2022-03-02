<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->name(),
            'title' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->name(),
            'city' => $this->faker->name(),
            'state' => $this->faker->name(),
            'postcode' => $this->faker->name(),
            'latitude' => $this->faker->name(),
            'longitude' => $this->faker->name(),
            'is_default' => $this->faker->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text'    => $this->faker->realText(),
            'user_id' => $this->faker->numberBetween(1, 11),
        ];
    }
}

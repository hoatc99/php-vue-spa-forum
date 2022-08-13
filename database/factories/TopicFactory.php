<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => null,
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(7),
            'views' => $this->faker->numberBetween(0, 10000),
            'created_at' => $this->faker->datetimeBetween('-5 months'),
        ];
    }
}

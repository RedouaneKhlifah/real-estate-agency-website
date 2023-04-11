<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\property>
 */
class propertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->word,
            'rooms' => $this->faker->word,
            'price' => $this->faker->numberBetween(1000, 5000),
            'area' => $this->faker->numberBetween(500, 2000),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'neighborhood' => $this->faker->word,
            'Age' => $this->faker->numberBetween(1, 10),
            'beds' => $this->faker->numberBetween(1, 5),
            'bathRooms' => $this->faker->numberBetween(1, 3),
            'Features' => $this->faker->sentence,
            'user_id' => 15
        ];
    }
}

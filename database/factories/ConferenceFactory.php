<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Conference>
 */
class ConferenceFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->sentence(3),
            'description' => fake()->text(),
            'date' => fake()->date(),
            'address' => fake()->address()
        ];
    }
}

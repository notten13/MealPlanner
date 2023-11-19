<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'cooking_time' => $this->faker->numberBetween(10, 120),
            'serves' => $this->faker->numberBetween(1, 6),
            'rating' => $this->faker->numberBetween(1, 5),
            'instructions' => $this->faker->sentences(6, true),
            'notes' => $this->faker->sentences(6, true),
            'source_url' => $this->faker->url(),
        ];
    }
}

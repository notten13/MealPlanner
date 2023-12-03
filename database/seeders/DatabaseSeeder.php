<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Ingredient;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        Ingredient::factory(50)->create();

        $ingredients = Ingredient::all();

        Recipe::factory(25)->create()->each(function ($recipe) use ($faker, $ingredients) {
            $randomIngredients = $ingredients->random(rand(3, 10));
            $randomIngredients->each(function ($ingredient) use ($recipe, $faker) {
              $recipe->ingredients()->attach($ingredient, [
                'quantity' => $faker->numberBetween(1, 500),
                'unit' => $faker->randomElement(['g', 'tsp', null]),
              ]);
            });
        });
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'ingredients' => $this->faker->text(),
            'instructions' =>   $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480, 'food'),
        ];
    }
}

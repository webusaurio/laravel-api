<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create(['email' => 'i@admin.com']);
        \App\Models\User::factory(29)->create();

        \App\Models\Category::factory(12)->create();
        \App\Models\Recipe::factory(100)->create();
        \App\Models\Tag::factory(40)->create();


        // Many to Many

        $recipes = \App\Models\Recipe::all();
        $tag = \App\Models\Tag::all();
        foreach ($recipes as $recipe) {
            $recipe->tags()->attach($tag->random(rand(2, 4)));
        }
    }
}

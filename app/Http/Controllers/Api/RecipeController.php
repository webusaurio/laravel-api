<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::with('category','tags', 'user')->get();
    }

    public function show(Recipe $recipe)
    {
        return $recipe;
    }

    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        $recipe->tags()->sync($request->tags);
        return $recipe;
    }

    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($request->all());
        $recipe->tags()->sync($request->tags);
        return $recipe;
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return response()->json(null, 204);
    }


}

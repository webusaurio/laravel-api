<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        return new CategoryCollection(Category::all());
    }

    public function show(Category $category)
    {
        $category = $category->load('recipes');
        return new CategoryResource($category);
    }
}

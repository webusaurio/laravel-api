<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);

//Route::apiResource('recipes', [RecipeController::class, 'index']);

Route::get('recipes', [RecipeController::class, 'index']);
Route::post('recipes', [RecipeController::class, 'store']);
Route::get('recipes/{recipe}', [RecipeController::class, 'show']);
Route::put('recipes/{recipe}', [RecipeController::class, 'update']);
Route::delete('recipes/{recipe}', [RecipeController::class, 'destroy']);

Route::get('tags', [TagController::class, 'index']);
Route::get('tags/{tag}', [TagController::class, 'show']);
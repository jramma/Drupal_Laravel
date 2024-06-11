<?php

use App\Http\Controllers\Api\ApiRecipeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio');
require __DIR__ . '/auth.php';

Route::get('/recipes', 'RecipeController@index')->name('recipes.index');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/api/recipes/{page}', [ApiRecipeController::class, 'index'])->name('api.recipes');
Route::get('/api/recipe/{id}', [ApiRecipeController::class, 'show'])->name('api.recipe');
Route::get('/api/category/{id}/{page}', [CategoryController::class, 'show'])->name('api.category');


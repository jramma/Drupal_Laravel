<?php
// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/recipes/{page}', [RecipeController::class, 'index']);
Route::get('/recipe/{id}', [RecipeController::class, 'show']);
Route::get('/category/{id}/{page}', [CategoryController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

Route::get('/', [MealController::class, 'index']);
Route::post('/meal/create', [MealController::class, 'create']);
Route::post('/meal/update', [MealController::class, 'update']);
Route::post('/meal/delete', [MealController::class, 'remove']);

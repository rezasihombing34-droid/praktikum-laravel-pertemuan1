<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

// Rute dasar dihubungkan ke method welcome()
Route::get('/', [GreetingsController::class, 'welcome']);

// Rute dengan parameter dihubungkan ke method greet()
Route::get('/greet/{name}/{npm}', [GreetingsController::class, 'greet']);
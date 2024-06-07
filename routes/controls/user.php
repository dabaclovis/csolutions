<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::prefix('users')
->controller(HomeController::class)
->group(fn() => [
    Route::get('home','index')->name('home'),
    Route::get('profile','profile')->name('users.profile'),
]);

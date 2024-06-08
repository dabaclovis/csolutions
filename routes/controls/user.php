<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::prefix('users')
->controller(HomeController::class)
->group(fn() => [
    Route::get('home','index')->name('home'),
    // show profile page
    Route::get('profile','profile')->name('users.profile'),
    // update mobile number
    Route::post('mobile-update','mobile')->name('users.mobile'),
    // update contacts
    Route::post('update-contacts','contacts')->name('users.contacts'),
]);

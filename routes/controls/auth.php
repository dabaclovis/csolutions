<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::prefix('authenticator')->group(fn() => [
    Route::controller(RegisterController::class)->group(fn() => [
        Route::post('regination','handledRegistration')->name('regination'),
    ]),
    Route::controller(LoginController::class)->group(fn() => [
        Route::post('logination','director')->name('logination'),
    ]),
]);

























?>




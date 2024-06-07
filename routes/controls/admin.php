<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AdminsController;



Route::prefix('admins')
->controller(AdminsController::class)
->group(fn() =>[
    Route::get('dashboard', 'index')->name('admins.index'),
]);

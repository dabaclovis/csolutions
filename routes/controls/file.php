<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\HandleFilesController;


Route::prefix('files')
->controller(HandleFilesController::class)
->group(fn() => [
    Route::post('avatar', 'userAvatar')->name('users.avatar'),
]);





?>

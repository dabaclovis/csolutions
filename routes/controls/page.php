<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;


Route::controller(PagesController::class)
->prefix('pages')
->group(fn()=>[
    Route::get('about','about')->name('pages.about'),
]);

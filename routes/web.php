<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','pages.index')->name('pages.index');

Auth::routes();


require  __DIR__. "/controls/admin.php";
require  __DIR__. "/controls/user.php";
require  __DIR__. "/controls/page.php";
require  __DIR__. "/controls/auth.php";
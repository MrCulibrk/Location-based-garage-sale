<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});

route::get('/channels', function(){
    return view('channels');
});

route::get('/', [ProductsController::class, 'index']);

route::get('/login', 'App\http\Controllers\UserController@login');
route::post('/login', 'App\http\Controllers\UserController@handleLogin');
Route::get('/register', 'App\Http\Controllers\UserController@register');
Route::post('/register', 'App\Http\Controllers\UserController@handleRegister');


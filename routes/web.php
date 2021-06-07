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

Route::get('/', [ProductsController::class, 'index']);

Route::get('/login', 'App\http\Controllers\UserController@login');
Route::post('/login', 'App\http\Controllers\UserController@handleLogin');
Route::get('/register', 'App\Http\Controllers\UserController@register');
Route::post('/register', 'App\Http\Controllers\UserController@handleRegister');

// Route::get('/logout', 'App\Http\Controllers\UserController@logout');
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', 'App\Http\Controllers\UserController@profileUser');
Route::get('/profile', 'App\Http\Controllers\UserController@profileProducts');
Route::post('/upload', 'App\Http\Controllers\UserController@uploadSettings')->middleware('auth');

Route::get('/sell', 'App\Http\Controllers\ProductsController@create')->middleware('auth');
Route::post('/uploadProducts', 'App\Http\Controllers\ProductsController@store')->middleware('auth');

Route::get('/updateProduct/{id}', 'App\http\Controllers\productsController@show');
Route::post('/buy', 'App\http\Controllers\productsController@buy');
Route::post('/updateProduct/{id}', 'App\http\Controllers\productsController@UpdateProduct');
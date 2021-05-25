<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

route::get('/login', function(){
    return view('login');
});

route::get('/register', function(){
    return view('register');
});

route::get('/', [UserController::class, 'index']);
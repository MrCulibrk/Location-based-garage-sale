<?php

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

Route::get('/', function () {
    //return'hello world';
    return view('welcome');
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

route::get('/Users', 'UserController@index');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $data['users'] = DB::table('users')->get();
        return view('index', $data);

    }

    // public function show($user){
    //     $user = DB::table('users')->where('id', $user)->first();
    //     dd($user);

    // }

    public function show(\App\Models\User $user){
        $user = $user;
        dd($user);
    }

    
}

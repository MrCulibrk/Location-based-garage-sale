<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $data['products'] = DB::table('products')->get();
        return view('index', $data);

    }
    
    
}

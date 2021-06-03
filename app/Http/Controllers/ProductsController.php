<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $data['products'] = DB::table('products')->get();
        return view('index', $data);

    }
    
    public function create(){
        return view('sell');
    }

    public function store(Request $request)
    {
        $product = new \App\Models\Products;
        $user = Auth::user();
        // Set object properties from the user input
        $product->productName = $request->input('productName');
        $product->description = $request->input('description');
        $product->location = $request->input('location');
        $product->price = $request->input('price');
        $product->user_id = Auth::user()->id;
        $product->active = 0;
        

        $product->save();
        
        return redirect('profile');
        
    }

}

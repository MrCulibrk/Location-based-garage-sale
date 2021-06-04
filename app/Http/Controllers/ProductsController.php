<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $data['products'] = DB::table('products')->where('active', 0)->get();
        return view('index', $data);

    }
    
    public function create(){
        return view('sell');
    }

    public function show($product){
        $data['product'] = Products::where('id', $product)->first();
        
        return view('updateProduct/show', $data);
    }

    public function updateProduct(Request $request)
    {
        Products::where('id', $request)->update(['productName' => $request->input('productName'),'description' => $request->input('description'),'location' => $request->input('location'),'location' => $request->input('location')]);
        return redirect('profile');
    }

    public function store(Request $request)
    {
        $product = new \App\Models\Products;
        $user = Auth::user();
        // Set object properties from the user input
        $product->productName = $request->input('productName');
        $product->description = $request->input('description');
        $product->location = $request->input('location');
        $product->geolat = $request->input('geolat');
        $product->geolng = $request->input('geolng');
        $product->price = $request->input('price');
        $product->user_id = $user->id;
        $product->active = 0;
        
        if ($pic= $request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if($request->move('images', $filename)){
                $product->Pics = $request->input($filename);
            }    
        }

        $product->save();
        
        return redirect('profile');
        
    }

    public function buy(Request $request)
    {
        $buy = Products::find($request->input('product_id'));
        $buy->active= 1;
        $buy->save();
        return redirect('/');
        
    }

    public static function distanceBetweenPoints($geolat1, $geolng1, $geolat2, $geolng2)
    {
        $theta = $geolng1 - $geolng2;
        $distance = (sin(deg2rad($geolat1)) * sin(deg2rad($geolat2))) + (cos(deg2rad($geolat1)) * cos(deg2rad($geolat2)) * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = ($distance * 60 * 1.1515) * 1.609344;

        return (round($distance, 2));
    }

}

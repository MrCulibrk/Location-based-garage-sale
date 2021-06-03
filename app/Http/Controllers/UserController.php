<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function handleRegister(Request $request){
        $user = new User();

        //check for dubble password
        $email = $user::where('email', $request->input('email'))->first();
        if($email){
            $request->session()->flash('error', 'email is already in use');
            return view('register');
        }

        if ($request->input('password') != $request->input('confirmPassword')) {
            $request->session()->flash('error', 'password are not the same');
            return view('register');
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Hash the password with BCRYPT
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect('login');

        
    }
    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        // Get the user's email and password and put them in an array
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        };

        $request->session()->flash('error', 'Something went wrong');
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function profile()
    {
        return view('profile');
    }

    public function profileUser()
    {
        
        $data['user'] = user::where('id', 'users')->first();

        return view('profile', $data);

        
    }
    public function uploadSettings(Request $request)
    {
        // Upload profile picture
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if (Auth::user()->profilePics) {
                Storage::delete('/public/images/' . Auth::user()->profilePics);
            }
            $request->image->storeAs('images', $filename, 'public');
            User::where('id', Auth::user()->id)
                ->update(['profilePics' => $filename]);
        }

        return redirect('/profile');
    
    }

    public function profileProducts(){
        $products['products'] = User::find(Auth::id())->products()->get();
        return view('profile', $products);
    }
}

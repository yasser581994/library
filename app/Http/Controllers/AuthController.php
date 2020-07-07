<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
      $request->validate([
      'name' => 'required|string|max:100',
      'email' => 'required|email|max:100',
      'password' => 'required|string|min:8',
      ]);

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'api_token' => Str::random(64)
      ]);

      return redirect( route('allBooks'));
    }


    public function login()
    {
        return view('auth.login');
    }


    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|min:8',
            ]);

           if( ! Auth::attempt(['email' => $request->email, 'password' => $request->password])){
               return redirect( route('loginAuth'));
           }
           return redirect( route('allBooks'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect( route('loginAuth'));
    }

}

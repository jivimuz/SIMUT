<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            // User is authenticated, redirect to some other page
            return redirect('/');
        }
        return view('Auth.Login');
    }

    public function loginAuth(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // dd($request);

        if (Auth::Attempt($data)) {
            return response()->json(['message' => 'Signed in successfully'], 200);
        }else{
            return response()->json(['message' => 'Email atau Password Salah'], 401);
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

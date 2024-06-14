<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index(){
        return view('user.login');
    }


    public function login(Request $request){
        $credentials = $request->validate([
            'email'=> ['bail', 'required', 'email'],
            'password'=> ['required'],
        ]);

        if(Auth::attempt(array_merge($credentials, ['role' => 'user']))){
            return redirect()->intended('user/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'User credentials are incorrect']);

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

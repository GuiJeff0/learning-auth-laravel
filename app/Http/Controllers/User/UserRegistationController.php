<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserRegistationController extends Controller
{
    public function create(){

        return view("user.create");
    }

    public function store(Request $request){
        $input = $request->all();
        $user = User::create([
            "name"=> $input["name"],
            "email"=> $input["email"],
            "password"=> bcrypt($input["password"]),
            'role' => 'user',
        ]);

        return view('user.thank');
    }
}

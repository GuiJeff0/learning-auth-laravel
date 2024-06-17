<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

Route::post('/login', function (Request $request){
    $credentials = $request->only(['email', 'password']);

    if(! $token = auth()->attempt($credentials)){
        abort(401);
    }

    return response()->json([
        'data' => [
            'token'=> $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() *60,
        ]
        ]);
});
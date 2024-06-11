<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class AdminLoginController extends Controller
{
    public function index(){
        return view("admin.login");
    }

    public function adminCheck(Request $request){
        try {
            // Validação das Credenciais
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Retorna erro de validação
            return redirect()->route('admin.login')
                ->withErrors($e->errors())
                ->withInput();
        }
    
        try {
            // Tentativa de Autenticação
            if(Auth::attempt(array_merge($credentials, ['role' => 'admin']))) {
                return redirect()->intended('admin/dashboard');
            } else {
                session()->flash('error', 'Invalid Credentials');
                return redirect()->route('admin.login');
            }
        } catch (\Exception $e) {
            // Lida com qualquer outra exceção que possa ocorrer
            session()->flash('error', 'An unexpected error occurred. Please try again.');
            return redirect()->route('admin.login');
        }
    }
    
}

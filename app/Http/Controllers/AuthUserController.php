<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AuthUser;

class AuthUserController extends Controller
{
     //Authentication
     public function authenticate(Request $request): \Illuminate\Http\RedirectResponse
     {
         $credentials = $request->only('email', 'password');
         
         if (Auth::attempt($credentials)) {
             return redirect('/list');
         }
 
         return redirect('/login')->with('msg', "Usuario não autenticado!");
     }

     //LogOut
     public function logout(): \Illuminate\Http\RedirectResponse
     {
         Auth::logout();
         return redirect('/')->with('msg', "Você saiu! Para logar click em Sign In!");
     }
}

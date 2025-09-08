<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
class LoginController extends Controller
{
    public function  showLogin(){
        return view('components.login');
    }
    public function processLogin(Request $request ):RedirectResponse{
        $request->validate([
            "email"=>"required|email|exists:users,email",
            "password"=>"required|string|min:6"
        ]);
        $credentials=$request->only('email',"password");
        if (Auth::attempt($credentials,$request->boolean('remmeber'))) {
        return redirect()
               ->route('welcome')
               ->with('status', 'connexion réussie.');
        }
          return back()->withErrors([
            'email'=> 'email invalide'
          ]);
    }
}

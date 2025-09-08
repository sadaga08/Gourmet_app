<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
class RegisterController extends Controller
{
    public function showRegister()
    {
       
        return view('components.register');
    }
    public function processForm(Request $request):RedirectResponse{
        $request->validate([
            "name"=>'required|string|max:255',
            "prenom"=>'required|string|max:255',
            "email"=>'required|string|max:255|email|unique:users',
            "password" => 'required|string|min:6|confirmed'
        ]);
        $user = User::create([
             "name"=>$request->name,
             "prenom"=>$request->prenom,
             "email"=>$request->email,
             "password"=>Hash::make($request->password)
        ]);
        return redirect()->
               route('login')->
               with('status','inscription reussit  vous pouvez vous connectez');
    }
    public function logout():RedirectResponse
    {
      Session::flush();
       Auth::logout();
       return redirect()
       ->route('welcome')
       ->with('status','vous êtes déconnecté');
    }
}

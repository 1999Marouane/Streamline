<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerForm(){
        return view('registration');
    }
    public function registration(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
             'email' => 'required|string|email|unique:users|max:255',
             'createpassword' => 'required|string|min:8',
             'confirmpassword' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name'=> $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
             'confirmpassword' => Hash::make($request->confirmpassword)]
        );
        auth()->login($user);

        return redirect('/login');
    }

}

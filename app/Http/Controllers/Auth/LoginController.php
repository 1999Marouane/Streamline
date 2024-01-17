<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    public function login(Request $request){



        $user = \App\Models\User::where('email','=',$request->email)->first();

        if ($user && Hash::check($request->password,$user->password)){
            return redirect('/home');
        }else{
            return redirect('/login');
        }






    }
}

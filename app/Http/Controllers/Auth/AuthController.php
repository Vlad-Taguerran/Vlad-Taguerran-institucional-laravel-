<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('site.auth.login.index');
    }

    public function createUser(Request $data)
    {

    }

    public function auth(Request $request)
    {   $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return Redirect::intended('home');
        }else{
            $msg = "Usuario ou senha invalidos";
            return Redirect::back()->withInput()
                        ->withErrors([$msg]);
        }
    }
    public function logout(){
        Auth::logout(session());
           return redirect(route('home'));

    }
}

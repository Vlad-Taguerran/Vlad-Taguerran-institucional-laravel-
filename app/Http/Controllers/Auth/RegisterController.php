<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller

{
    use RegistersUsers;


    public function index()
    {
        return view('site.auth.register.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(Request $data)
    {
            $validate = Validator::make($data->all(),[
                "name" => "required | max:255 | string",
                "email" => "required|unique:users,email| max:255 | string",
                "password" => "required | min:8 | string"
            ]);
            $massange = [
                "name"
            ];
            if ($validate->fails()){
                return redirect('register')
                    ->withErrors($validate)
                    ->withInput();
            }

             User::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=> Hash::make($data['password']),
            ]);
             return redirect('home');


    }

}

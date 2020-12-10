<?php

namespace App\Http\Controllers\User;

use App\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()

    {
       $archivos= Admin::get();
            echo asset('/public/storage/');
        return view('site.home.users.index',compact('archivos'));

    }
}

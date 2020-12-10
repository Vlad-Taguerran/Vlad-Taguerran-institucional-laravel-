<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view("site/home.index");
   }
   public function artigo()
   {
       return view("site/artigo/index");
   }
   public function institu(){
       return view("site/institucional/index");
   }
}

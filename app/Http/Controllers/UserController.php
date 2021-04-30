<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('home');
   }

   public function booking(){
    return view('user.booking');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('home');
   }

    public function yourbuy(){
    return view('user.yourbuy');
}


}

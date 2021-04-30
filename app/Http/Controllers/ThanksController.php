<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function contactThanks(){
        return view('home-layout.contact-thanks');
    }
}

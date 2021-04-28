<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
      //return view('dashboard');
       return view('admin/dashboard_layout');
      
    }
}

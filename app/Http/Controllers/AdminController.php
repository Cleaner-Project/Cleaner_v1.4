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
    public function dash()
    {
      return View('admin/1_dash_home');
    }

    public function listuser()
    {
      return View('admin/3_list-user');
    }

    public function booking()
    {
      return View('admin/2_admin-booking');
    }

    public function create_cleaner()
    {
      return View('admin/4_create-cleaner');
    }





}


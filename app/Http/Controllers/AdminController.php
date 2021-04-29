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

    public function listuser()
    {
      return View('admin/pages/list-user');
    }

    public function booking()
    {
      return View('admin/pages/admin-booking');
    }

    public function create_cleaner()
    {
      return View('admin/pages/create-cleaner');
    }





}


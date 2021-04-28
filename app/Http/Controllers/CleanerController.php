<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{
    public function admin(){
       
          return view('cleaner/cleaner_layout');
        
      }
}

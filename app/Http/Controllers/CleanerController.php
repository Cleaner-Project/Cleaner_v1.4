<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{
    public function cleaner(){
       
         // return view('cleaner/cleaner_layout');
           return view('cleaner/cleaner_layout');
        
      }
      public function newbooking(){
       
          // return view('cleaner/cleaner_layout');
            return view('cleaner/cleanerpage.cleanwork');
         
       }


}

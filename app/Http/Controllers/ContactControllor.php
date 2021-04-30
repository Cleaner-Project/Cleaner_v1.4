<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactControllor extends Controller
{
    public function contactSumit(Request $request){



        $conact = new Contact();
        $conact->to ='Rossocheat1@gmail.com';
        $conact ->name =$request ->get('name');
        $conact ->email =$request ->get('email');
        $conact ->subject =$request ->get('subject');
        $conact ->message =$request ->get('message');
        $conact->save();

        return redirect(route('contact.thanks_you',['success'=>1]));

   }
}

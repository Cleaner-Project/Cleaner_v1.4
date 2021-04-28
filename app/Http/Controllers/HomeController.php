<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    // /
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // /
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */


    public function index(Request $request)
    {
        //  return view('home');
        return redirect()->route(auth()->user()->role);

        // // It check Auth and then go to user table, check the role of that account is admin or not 
        // // if true , it will view in dashboard
        // if(Auth::user()->role == 'admin'){
        //     return redirect()->route('admin');
        // }else{
        //     return 'you are not admin';
        // }
        
    }
};
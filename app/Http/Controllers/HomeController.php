<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('staff')){
            // $trainings = Training::all()->toArray();
            return view('/account/staffHomepage');
        }
        else if(Auth::user()->hasRole('customer')){
            return view('/registration/customerHomepage');
        }
        else if(Auth::user()->hasRole('rider')){
            return view('/registration/riderHomepage');
        }
    }
}

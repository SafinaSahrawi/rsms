<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    function savetodatabase(Request $req)
    {
        print_r($req->input());
    }

    function savetodatabase1(Request $req)
    {
        print_r($req->input());
    }
}

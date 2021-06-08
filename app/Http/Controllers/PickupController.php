<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pickup;

class PickupController extends Controller
{
    function savetopickup(Request $req)
    {
        // print_r($req->input());
        $pickup = new Pickup;
        $pickup->pickup_address= $req->pickup_address;
        $pickup->pickup_date= $req->pickup_date;
        $pickup->pickup_time= $req->pickup_time;
        echo $pickup->save();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Delivery;


class DeliveryController extends Controller
{
    function savetodelivery(Request $req)
    {
        // print_r($req->input());
        $delivery = new Delivery;
        $delivery->delivery_address= $req->delivery_address;
        $delivery->delivery_date= $req->delivery_date;
        $delivery->delivery_time= $req->delivery_time;
        echo $delivery->save();
    }
}

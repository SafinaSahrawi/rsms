<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    //

    function savingdatabase(Request $req)
    {
        print_r($req->input());
        $payment = new Payment;
        $payment->CustomerDeliveryAdd = $req->CustomerDeliveryAdd;
        $payment->CustomerContactNum = $req->CustomerContactNum;
        echo $payment->save();
    }
}

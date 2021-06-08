<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Payment;
use App\Payment1;




class PaymentController extends Controller
{
    //
    function savetodatabase(Request $req)
    {
        // print_r($req->input());
        $payment = new Payment;
        $payment->CustomerDeliveryAdd= $req->CustomerDeliveryAdd;
        $payment->CustomerContactNum= $req->CustomerContactNum;
        echo $payment->save();
    }

    function savetodatabase1(Request $req)
    {
        $payment1 = new Payment1;
        $payment1->Username= $req->Username;
        $payment1->Password= $req->Password;
        $payment1->CardNumber= $req->CardNumber;
        $payment1->TAC= $req->TAC;
        echo $payment1->save();

    }

    public function index (Request $request)
    {

        $payment = Payment::all(); //sql command: SELECT * FORM TABLE....

        return view('payment.customerpaymentlist')->with(compact('payment'));
    }
}

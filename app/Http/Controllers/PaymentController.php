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

    public function indexdetails (Request $request)
    {
        $payment1 = Payment1::all(); //sql command: SELECT * FORM TABLE....

        return view('payment.customerpaymentlist1')->with(compact('payment1'));
        
    }

    public function destroy($id)
    {
        //delete selected record
        $payment1 = \App\Payment1::find($id);
        $payment1->delete();

        return redirect('/payment/customerpaymentlist1')->with('successdelete', 'Payment deleted info has been deleted!!');
    }
}

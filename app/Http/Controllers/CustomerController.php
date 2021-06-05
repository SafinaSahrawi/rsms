<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display  homepage interfaces
        //return view('registration.customerHomepage'); //customerHomepage.blade.php
        return view ('registration.registercustomer');//register customer
        return view ('services.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //call form update (profile.php)
        $customer=Training::find($id);
        return view('customers.profile')->with(compact(('customer'))); //call form profile
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function storetocustomer(Request $req)
    {
        // print_r($req->input());
        $customer = new customer;
        $customer->username= $req->username;
        $customer->fullname= $req->fullname;
        $customer->contact= $req->contact;
        $customer->address= $req->address;
        $customer->password= $req->password;
        $customer->email= $req->email;
        return redirect('/success');
    }


}

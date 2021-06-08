<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Customer;
use App\rider;

class StaffController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCustomer(Request $request)
    {
        if($request->GET('keyword')!=null)
        {
            //search based on keyword
            $keyword = $request->GET('keyword');
            $customers = Customer::where('username','LIKE','%'.$keyword.'%')->GET();
            $customers = Customer::where('username','LIKE','%'.$keyword.'%')->paginate(10); //data yang akan keluar
        }
        //display all records
        else
        {
            $customers = Customer::all();
            $customers = Customer::paginate(10);
        }
        return view('account.customerProfileList')->with(compact('customers')); //call $customers
    }

    public function indexRider(Request $request)
    {
        // if($request->GET('keyword')!=null)
        // {
        //     //search based on keyword
        //     $keyword = $request->GET('keyword');
        //     $customers = Customer::where('username','LIKE','%'.$keyword.'%')->GET();
        //     $customers = Customer::where('username','LIKE','%'.$keyword.'%')->paginate(10); //data yang akan keluar
        // }
        // //display all records
        // else
        // {
        //     $customers = Customer::all();
        //     $customers = Customer::paginate(10);
        // }
        $riders = rider::all();
        return view('account.riderProfileList')->with(compact('riders')); //call $customers
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display Staff homepage
        return view('account.staffHomepage');
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
    public function showCustomer($id)
    {
        $customer = Customer::find($id);
        return view('account.customerProfile')->with(compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    public function destroyCustomer($id)
    {
        //delete selected record
        $customer = \App\Customer::find($id);
        $customer->delete();

        return redirect('/account/customerProfileList')->with('delete', "Customer $id has been deleted!");
    }
}

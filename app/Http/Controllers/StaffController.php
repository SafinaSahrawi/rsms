<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Customer;
use App\rider;

use App\Role;
use App\User;

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
    public function index(Request $request)
    {
        if($request->GET('keyword')!=null)
        {
            //search based on keyword
            $users =  User::all();
            $userList = array();

            foreach ($users as $user){
                if ($user->hasRole('customer')){
                    $userList[] = $user;
                }
            }
            $keyword = $request->GET('keyword');
            $userList = User::where('name','LIKE','%'.$keyword.'%')->GET();
            $userList = User::where('name','LIKE','%'.$keyword.'%')->paginate(10); //data yang akan keluar
        }
        //display all records
        else
        {
            $users =  User::all();
            $userList = array();

            foreach ($users as $user){
                if ($user->hasRole('customer')){
                $userList[] = $user;
            }
        }
    }
    return view('account.customerProfileList', compact('userList'));
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
        $user = User::find($id);

        return view('/account/customerProfile')->with(compact('user'));
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
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('/account/customerProfileList')->with('delete','DATA has been DELETED!');
    }
}
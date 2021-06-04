<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Service; //include the namespace of Service.php

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //services/index

        $services  = Service::all()->toArray();
        return view ('services.custIndex', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display form
        return view ('services.createService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert new record process 
        // $service = $this->validate(request(), [
            // 'id'=>'required', 
            // 'name'=> 'required',
            $selectDevice = $request->input('deviceType');
            $brand = $request->input('brand');
            $serialNo = $request->input('serialNo');
            $selectFaulty = $request->input('faulty');
            $data = array('deviceType' => $selectDevice,'brand' => $brand, 'serialNo' => $serialNo, 'faulty' => $selectFaulty);

            DB::table('services')->insert($data);

        return redirect('/services')->with('success', 'Service has been added');
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
        //
        //display edit form 
        $service = Service::find($id); 
        return view('services.CustEdit',compact('service','id'));
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
        //save updated data 
        $data = $this->validate($request,
        ['deviceType'=> 'required', 
            'brand' => 'required',
            'serialNo'  => 'required',
            'faulty'  => 'required' ]);

        $data['id'] = $id; 

        $service = Service::find($id); 
        $service->id=$request->get('id'); 
        $service->deviceType=$request->get('deviceType');
        $service->brand=$request->get('brand'); 
        $service->serialNo=$request->get('serialNo'); 
        $service->faulty=$request->get('faulty');  
        $service->save(); 

        return redirect('/services')->with('success', 'Service info has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete selected record
        $service = \App\Service::find($id);
        $service->delete();

        return redirect('/services')->with('successdelete', 'Service info has been deleted!!');
    }
}

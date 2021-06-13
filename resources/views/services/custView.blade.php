@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CUST - Edit Quotation') }}</div>

<!--                 Customer view quotation updated-->
                <div class="card-body">

                    <!-- UPDATE CONTROLLER ROUTE -->
                    <!--form start-->
                    <form method="post" action="{{action('ServiceController@show', $id)}}">
                        @csrf 
                        <input name="_method" type="hidden" value="PATCH">

                        <!-- ID CONTROLLER TO GET VALUE -->
                        <input type="hidden" name="id" value="{{$service['id']}}"> 

                        <label for="id">Service ID:</label> 
                        <input type="text" value="{{$service->id}}" class="form-control" readonly> 
                        
                        <label for="name">Name:</label> 
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly> 
                        
                        <label for="deviceType">Device Type</label> 
                        <input type="text" name="deviceType" class="form-control" value="{{$service->deviceType}}" readonly>
                        
                        <label for="brand">Brand</label> 
                        <input type="text" class="form-control" name="brand" value="{{$service->brand}}">
                        
                        <label for="serialNo">Serial Number</label> 
                        <input type="text" class="form-control" name="serialNo" value="{{$service->serialNo}}" readonly="form-control">
                        
                        <label for="faulty">Faulty</label>
                        <input type="text" name="faulty" class="form-control" value="{{$service->faulty}}" readonly="form-control">

                        <label for="comment">Comment</label> 
                        <input type="text" class="form-control" value="{{$service->comment}}" readonly="form-control">
                        
                        <label for="cost">Repair Cost</label> 
                        <input type="text" class="form-control" value="{{$service->cost}}" readonly="form-control">
                        
                        <!-- add PRINT BUTTON -->
                        <!-- CLICK BUTTON, GO TO CustConfirmRepair -->

                        <hr><button type="submit" class="btn btn-success">Proceed</button>
                    </form>
                    <!--form end-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
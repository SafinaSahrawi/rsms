@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STAFF -Update Quotation Request') }}</div>

<!--                     from createQuotation then Update Customer Quotation Request 
                    Then Customer can do confirmation at custConfirmRepair -->

                <div class="card-body">

                	<!--form start-->
                    <form method="post" action="{{action('ServiceController@update', $id)}}">
                        @csrf 
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" name="id" value="{{$service['id']}}"> 
                        
                        <label for="id">Service ID:</label> 
                        <input type="text" value="{{$service->id}}" class="form-control" readonly> 
                        
                        <label for="name">Name:</label> 
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly> 
                        
                        <label for="deviceType">Device Type</label> 
                        <select name="deviceType" class="form-control" value="{{$service->deviceType}}">
                            <option value="cpu">CPU/Personal Computer</option>
                            <option value="laptop">Laptop</option>
                            <option value="monitor">Monitor</option>
                            <option value="hardisk">Hard Disk</option>
                            <option value="not_listed">Others</option>
                        </select>
                        
                        <label for="brand">Brand</label> 
                        <input type="text" class="form-control" name="brand" value="{{$service->brand}}">
                        
                        <label for="serialNo">Serial Number</label> 
                        <input type="text" class="form-control" name="serialNo" value="{{$service->serialNo}}">
                        
                        <label for="faulty">Faulty</label>
                        <input type="text" name="faulty" class="form-control" value="{{$service->faulty}}" readonly="form-control">


                        <label for="comment">Comment</label> 
                        <input type="text" class="form-control" name="comment" value="{{$service->comment}}" readonly="form-control">
                        
                        <label for="cost">Repair Cost</label> 
                        <input type="text" class="form-control" name="cost" value="{{$service->cost}}" readonly="form-control">

                         <label for="status">Repair Progress</label> 
                        <select name="status" class="form-control" value="{{$service->status}}">
                            <option value="pending">CPU/Personal Computer</option>
                            <option value="on going">Laptop</option>
                            <option value="completed">Monitor</option>
                        </select>

                        <hr><button type="submit" class="btn btn-success">Save Update</button>
                    </form>
                	<!--form end-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Services') }}</div>

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
                        <select name="faulty" class="form-control" value="{{$service->faulty}}">
                            <option value="screen">Screen</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="waterDamage">Water Damage</option>
                            <option value="others">Others</option>
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
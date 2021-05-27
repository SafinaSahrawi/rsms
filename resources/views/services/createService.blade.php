@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Services (customer)') }}</div>

                <div class="card-body">

                    <!--form start-->
                    <form action="{{url('services')}}" method="POST">
                        @csrf

                        Device Type
                        <input name="deviceType" type="text" class="form-control">

                        Brand
                        <input name="brand" type="text" class="form-control">

                        Serial Number
                        <input name="serialNo" type="text" class="form-control">

                        Device Faulty
                        <input name="faulty" type="text" class="form-control">

                        Cost
                        <input name="cost" type="text" class="form-control">

                        <hr>
                        
                        <button type="submit" class="btn btn-primary">Insert to DB</button>

                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </form>
                    <!--form end-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
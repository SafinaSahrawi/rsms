@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT SERVICES (CUSTOMER)') }}</div>

                <div class="card-body">

                	<!--form start-->
                    <form method="post" action="{{action('ServiceController@update', $id)}}">
                        @csrf 
                        <input name="_method" type="hidden" value="PATCH"> 
                        <label for="user_id">User ID:</label> 
                        <input type="text" class="form-control" name="user_id" value="{{$service->user_id}}"> 
                        <label for="desc">Name:</label> 
                        <input type="text" class="form-control" name="name" value="{{$service->name}}"> 
                        <label for="trainer">Device Type</label> 
                        <input type="text" class="form-control" name="deviceType" value="{{$service->deviceType}}"> 
                        <button type="submit" class="btn btn-success">Save Update</button>
                    </form>
                	<!--form end-->

<!--                     $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->references('name')->on('users');
            $table->string('deviceType');
            $table->string('brand');
            $table->string('serialNo');
            $table->string('faulty');
            $table->double('cost');
            $table->string('status')->nullable();
            $table->timestamps(); -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Profile') }}</div>

                <div class="card-body">

                	<!--form start-->
                	<form action="{{ action('TrainingController@store')}}" method="POST">
                		@csrf

                		Username
                		<input name="username" type="text" class="form-control">

                		Password
                		<input name="password" type="text" class="form-control">

                		Email
                		<input name="email" type="text" class="form-control">

                        Phone Number
                        <input name="phone" type="text" class="form-control">

                        Address
                        <input name="address" type="text" class="form-control">

                		<hr>
                		
                		<button type="submit" class="btn btn-primary">Update</button>

                        <button type="submit" class="btn btn-primary">Cancel</button>
                	</form>
                	<!--form end-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
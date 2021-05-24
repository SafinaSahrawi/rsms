@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Homepage') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
                	<form action="{{ url('CustomerController@create')}}" method="POST">

                		<a href="http://programminghead.com"><button class="btn btn-primary">View Profile</button></a><br><br>

                		<a href="http://programminghead.com"><button class="btn btn-primary">Services</button></a><br><br>

                		<a href="http://programminghead.com"><button class="btn btn-primary">My Order</button></a>

                	</form>
                	<!--form end-->

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
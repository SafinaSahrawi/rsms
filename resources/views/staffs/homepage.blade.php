@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Staff Homepage') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
                	<form action="{{ action('StaffController@create')}}" method="POST">

                		<a href="http://programminghead.com"><button class="btn btn-primary">Customer List</button></a><br><br>

                		<a href="http://programminghead.com"><button class="btn btn-primary">Quotation Requests</button></a><br><br>

                		<a href="http://programminghead.com"><button class="btn btn-primary">Services Status</button></a>

                	</form>
                	<!--form end-->

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Staff Homepage') }}</div>

                <div class="card-body">

                	<center>

                		<a href="http://rsms.test/account/customerProfileList"><button class="btn btn-primary">Customer List</button></a><br><br>

                		<a href=""><button class="btn btn-primary">Rider List</button></a><br><br>

                        <a href=""><button class="btn btn-primary">Quotation Requests</button></a><br><br>

                        <a href="http://rsms.test/services"><button class="btn btn-primary">Services Status</button></a><br><br>

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
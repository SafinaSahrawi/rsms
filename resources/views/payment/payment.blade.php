@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payment Homepage') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
                	<form>

                		<a href="http://rsms.test/paymentoption"><button class="btn btn-primary">Payment</button></a><br><br>


                	</form>
                	<!--form end-->

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
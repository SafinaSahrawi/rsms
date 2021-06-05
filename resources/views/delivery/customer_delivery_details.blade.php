@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delivery') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
                  <form method="post" action="">
                  @csrf

  <div class="form-group">
    <label for="inputAddress">Delivery  Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="House Num, Street Num, Postal Code, City, State">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <label for="time">Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Proceed to Payment</button>
</form>
                	<!--form end-->

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
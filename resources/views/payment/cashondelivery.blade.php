@extends('layouts.app')

@section('content')
<html>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cash on Delivery') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
<form action="submit" method="POST">
@csrf
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="CustomerDeliveryAdd" placeholder="Apartment,building,no">
  </div>
  <div class="form-group">
    <label for="inputContactNum">Contact Number</label>
    <input type="text" class="form-control" name="CustomerContactNum" placeholder="Example: +6011223344">
  </div>
  <div class="form-group">
    <label for="payment">Payment</label>
    <input type="text" class="form-control" name="payment" id="payment" disabled>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck1">
      <label class="form-check-label" for="gridcheck1">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Checkout</button>
</form>
                	<!--form end-->

                	</center>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</htm>


@endsection
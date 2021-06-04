@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bank Details') }}</div>

                <div class="card-body">

                	<center>

                	<!--form start-->
<form method="post" action="submit">

@csrf

  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="inputContactNum" name="Password" placeholder="">
  </div>
  <div class="form-group">
    <label for="CardNumber">Card Number</label>
    <input type="text" class="form-control" id="CardNumber" name="CardNumber" placeholder="">
  </div>
  <div class="form-group">
    <label for="TAC">TAC Number</label>
    <input type="text" class="form-control" id="TAC" name="TAC" placeholder="Enter within 1 minute">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
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
</html>


@endsection
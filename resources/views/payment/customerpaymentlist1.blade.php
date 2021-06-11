@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer List

                <div class="float-right">
                <form action="submit" method="POST">
                    <form class = "form-inline">
                        <input type="text" name="keyword" class="form-control" method="get" action="{{ route('payment:customerpaymentlist') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Payment ID</th>
                            <th>Username</th>
                            <th>Card Number</th>
                            <th>TAC</th>
                            <th>Update</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($payment1 as $pb)
                            <tr>
                                <td>{{ $pb->paymentbank_id }}</td>
                                <td>{{ $pb->Username }}</td>
                                <td>{{ $pb->CardNumber }}</td>
                                <td>{{ $pb->TAC }}</td>
                                <td>@csrf
                                      
                                      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Verify
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Paid</button>
    <button class="dropdown-item" type="button">Unpaid</button>

  </div>
</div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                </div>
            </div></div>
        </div>
    </div>
</div>
@endsection
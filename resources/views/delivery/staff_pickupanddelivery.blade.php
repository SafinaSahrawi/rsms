@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer List

                <div class="float-right">
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
                            <th>Delivery Address</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($payment as $pb)
                            <tr>
                                <td>{{ $pb->payment_id }}</td>
                                <td>{{ $pb->CustomerDeliveryAdd }}</td>
                                <td>{{ $pb->CustomerContactNum }}</td>
                                <td>@csrf
                                      <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn btn-danger" type="submit">
                                          <i class="fas fa-trash-alt"></i>
                                      </button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div></div>
        </div>
    </div>
</div>
@endsection
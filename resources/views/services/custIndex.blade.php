@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

                    <!-- <div class= "card">
                        <div class="card-header">Listing Service

                            <form method="get" action="{{ url('services') }}" class="form-inline">
                                @csrf
                                <input type="text" name="txtsearch" id="txtsearch" class="form-control">
                                <button type="submit" class="btn btn-primary">SEARCH
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>

                        </div></div> -->

                        <div class="card">
                <div class="card-header">{{ __('List of Services') }}</div>

                <!-- customer can view all requested services by their ID -->

                <div class="card-body">

                    @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('successdelete'))
                            <div class="alert alert-warning">
                                {{ session('successdelete') }}
                            </div>
                        @endif

                    <table class="table table-striped">
                        
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Device Type</th>
        <th>Brand</th>
        <th>Status</th>
        <th colspan="2" text-align="center">Action</th>
    </tr>
</thead>
<tbody>
    @foreach($services as $service)

    <tr>
        <td>{{$service['id']}}</td>
            @foreach($service->users as $user)
        <td>{{ $user->name }}</td>
            @endforeach
        <td>{{$service['deviceType']}}</td>
        <td>{{$service['brand']}}</td>
        <td>{{$service['status']}}</td>

        <td><a href="{{action('ServiceController@edit', $service['id'])}}" class="btn btn-warning">
                                      <i class="fa fa-edit"></i>
                                  </a></td>
                              <td>
                                  <form action="{{action('ServiceController@destroy', $service['id'])}}" method="post">
                                      @csrf
                                      <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn btn-danger" type="submit">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                  </form>
                            </td>
        <td></td>
    </tr>
    @endforeach

</tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Services') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        
<thead>
    <tr>
        <th>ID</th>
        <th>Device Type</th>
        <th>Brand</th>
        <th>SerialNo</th>
        <th>Device Faulty</th>
        <th>Cost</th>
    </tr>
</thead>
<tbody>
    @foreach($services as $service)

    <tr>
        <td>{{$service['id']}}</td>
        <td>{{$service['deviceType']}}</td>
        <td>{{$service['brand']}}</td>
        <td>{{$service['serialNo']}}</td>
        <td>{{$service['faulty']}}</td>
        <td>{{$service['cost']}}</td>
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
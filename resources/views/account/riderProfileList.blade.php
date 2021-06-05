@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rider List

                <div class="float-right">
                    <form class = "form-inline">
                        <input type="text" name="keyword" class="form-control" method="get" action="{{ route('account:customerProfileList') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($riders as $rider)
                            <tr>
                                <td>{{ $rider->id }}</td>
                                <td>{{ $rider->username }}</td>
                                <td>{{ $rider->email }}</td>

                                <td><a class="btn btn-success" href=""><i class="fa fa-list-alt"></i></a>

                                <td><!-- form with delete button -->
                                    <form method="POST" action="">
                                        @csrf <!-- security token -->
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete record?">
                                        <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </td>
                        </tr> @endforeach
                        </tbody>
                    </table>
                </div>
            </div></div>
        </div>
    </div>
</div>
@endsection
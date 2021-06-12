@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer List

                <div class="float-right">
                    <form class = "form-inline">
                        <input type="text" name="keyword" class="form-control" method="get" action="{{ route('account:customerProfileList') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif

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
                            @foreach ($userList as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td><a class="btn btn-success" href="{{ action('StaffController@showCustomer', $user->id) }}"><i class="fa fa-list-alt"></i></a>

                                <td><!-- form with delete button -->
                                    <form method="POST" action="{{ action('StaffController@destroy', $user->id) }}">
                                        @csrf <!-- security token -->
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
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
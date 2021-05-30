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

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><!-- form with delete button -->
                                    <form method="POST" action="{{action('StaffController@delete', $users['id'])}}">
                                        @csrf <!-- security token -->
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete record?">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
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
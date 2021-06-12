@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Customer Profile') }}

                    @csrf <!-- security token -->
                    <form method="POST" action="{{ action('StaffController@destroy', $user->id) }}">
                        @csrf <!-- security token -->
                        <button class="btn btn-danger float-right" onclick="return confirm('Delete Customer ID: {{ $user->id }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>

                <!-- form start -->
                    <form>
                        <br>
                        ID
                        <input type="text" class="form-control" name="title" value="{{ $user->id }}" readonly>

                        Name
                        <input type="text" class="form-control" name="title" value="{{ $user->name }}" readonly>

                        Username
                        <input type="text" class="form-control" name="title" value="{{ $user->username }}" readonly>

                        E-Mail
                        <input type="text" class="form-control" name="title" value="{{ $user->email }}" readonly>

                        Phone
                        <input type="text" class="form-control" name="title" value="{{ $user->contact }}" readonly>

                        Address
                        <input type="text" class="form-control" name="title" value="{{ $user->address }}" readonly>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
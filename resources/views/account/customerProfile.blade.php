@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Profile') }}

                    @csrf <!-- security token -->
                    <form method="POST" action="{{ action('StaffController@destroyCustomer', $user->id) }}">
                        @csrf <!-- security token -->
                        <button class="btn btn-danger float-right" onclick="return confirm('Delete Customer ID: {{ $customer->id }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                </div>

                <!-- form start -->
                    <form>
                        <br>
                        ID
                        <input type="text" class="form-control" name="title" value="{{ $customer->id }}" readonly>

                        Name
                        <input type="text" class="form-control" name="title" value="{{ $customer->name }}" readonly>

                        Username
                        <input type="text" class="form-control" name="title" value="{{ $customer->username }}" readonly>

                        E-Mail
                        <input type="text" class="form-control" name="title" value="{{ $customer->email }}" readonly>

                        Phone
                        <input type="text" class="form-control" name="title" value="{{ $customer->contact }}" readonly>

                        Address
                        <input type="text" class="form-control" name="title" value="{{ $customer->address }}" readonly>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
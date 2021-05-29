@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Services (staff)') }}</div>

                <div class="card-body">

                	<!--form start-->
                	<form action="{{url('services')}}" method="POST">
                		@csrf

                        <table style="center">
                            <div class="column">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        <tr>
                        <td><input name="username" value="{{ Auth::user()->name }}" class="form-control" readonly></td>
                        <td><input name="email" type="text" value="{{ Auth::user()->email }}" class="form-control"></td>
                        <td><input name="phone" type="text" class="form-control"></td>
                        </tr>
                        </div></table>

                		Device Type
                		<input name="deviceType" type="text" class="form-control">

                		Brand
                		<input name="brand" type="text" class="form-control">

                		Serial Number
                		<input name="serialNo" type="text" class="form-control">

                        Device Faulty
                        <input name="faulty" type="text" class="form-control">

                        <select id="selectBox" name="faulty" class="form-control" onchange="changeFunc();">
                            <option value="screen">Screen</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="waterDamage">Water Damage</option>
                            <option value="others">Others</option>
                            <input name="faulty" placeholder="Please State the Faulty" class="form-control" type="text" style="display: none" id="textboxes">
                        </select>

                        Cost
                        <input name="cost" type="text" class="form-control">

                		<hr>

                		
                		<button type="submit" class="btn btn-primary">Insert to DB</button>

                        <button type="submit" class="btn btn-primary">Cancel</button>
                	</form>
                	<!--form end-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
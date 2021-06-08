@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Quotation') }}</div>

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
                        <select name="deviceType" class="form-control">
                            <option value="cpu">CPU/Personal Computer</option>
                            <option value="laptop">Laptop</option>
                            <option value="monitor">Monitor</option>
                            <option value="hardisk">Hard Disk</option>
                            <option value="not_listed">Others</option>
                        </select>


                        Brand
                        <input name="brand" type="text" class="form-control">

                        Serial Number
                        <input name="serialNo" type="text" class="form-control">

                        Device Faulty
                        <select name="faulty" class="form-control">
                            <option value="screen">Screen</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="waterDamage">Water Damage</option>
                            <option value="others">Others</option>
                        </select>
                        <hr>
                		
                		<button type="submit" class="btn btn-primary">Request</button>

                        <button type="submit" class="btn btn-primary">Cancel</button>
                	</form>
                	<!--form end-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
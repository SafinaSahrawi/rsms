@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Services (customer)') }}</div>

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
<!--                        <input name="deviceType" type="text" class="form-control"> -->
                        <select id="deviceBox" name="deviceType" class="form-control" onchange="changeDevice();">
                            <option value="cpu">CPU/Personal Computer</option>
                            <option value="laptop">Laptop</option>
                            <option value="monitor">Monitor</option>
                            <option value="hardisk">Hard Disk</option>
                            <option value="not_listed">Others</option>
                            <input name="deviceType" placeholder="Please State Device Type" class="form-control" type="text" style="display: none" id="inputbox">
                        </select>


                        Brand
                        <input name="brand" type="text" class="form-control">

                        Serial Number
                        <input name="serialNo" type="text" class="form-control">

                        Device Faulty
                        <select id="selectBox" name="faulty" class="form-control" onchange="changeFunc();">
                            <option value="screen">Screen</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="waterDamage">Water Damage</option>
                            <option value="others">Others</option>
                            <input name="faulty" placeholder="Please State the Faulty" class="form-control" type="text" style="display: none" id="textboxes">
                        </select>
                        <hr>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </form>
                    <!--form end-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                        <input name="deviceType" type="text" class="form-control">

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

<!-- <script type="text/javascript">
function changeFunc() {
var selectBox = document.getElementById("selectBox");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
if (selectedValue=="others"){
$('#textboxes').show();
}
else {
alert("Error");
$('#textboxes').hide();
}
}
</script> -->

<!-- <style type="text/css">
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style> -->
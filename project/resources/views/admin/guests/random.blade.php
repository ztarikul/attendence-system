<x-admin-master>
@section('content')
<h1 style="color:blue">Random Report</h1>

<form  method="post" action="{{route('guest.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-group" style="color:black;">
<label for="title"><b>Employee</b></label>
<select id="employee" name="employee" style="width:42%">
       <option value="">All</option>
       <option value="">Single</option>
</select>
</div>


<!-- <div class="form-group" style="color:black;">
<label for="title"><b>Employeement ID</b></label>
<input type="text"  style="width:50%" class="form-control" name="manage_id" id="title" aria-describedby="" placeholder="Enter id">
</div> -->

<div class="form-group" style="color:black;">
<label for="title"><b>From</b></label>
<input type="date" style="width:50%" class="form-control" name="from_date" id="title" aria-describedby="" placeholder="date">
</div>

<div class="form-group" style="color:black;">
<label for="title"><b>To</b></label>
<input type="date" style="width:50%" class="form-control" name="To_date" id="title" aria-describedby="" placeholder="date">
</div>


<div class="form-group" style="color:black;">
<input type="hidden" style="width:50%" class="form-control" name="emp_guest" value="emp_guest" id="title" aria-describedby="" placeholder="Enter Guest Status">
</div>


</form>


<div class="wsite-form-radio-container">

<label class="wsite-form-label" style="width: 100%; color:blue">Please submit</label><br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</div>

@endsection 

</x-admin-master>



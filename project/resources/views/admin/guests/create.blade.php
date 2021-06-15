<x-admin-master>
@section('content')
<h1 style="color:blue">Employee Guest</h1>

<div class="row">
<div class="col-sm-6">
<form  method="post" action="{{route('guest.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-group" style="color:black;">
    <label for="title"><b>Name</b></label>
    <input type="text" style="width:50%" class="form-control" name="name" id="title" aria-describedby="" placeholder="Enter name">
</div>

<div class="form-group" style="color:black;">
    <label for="title"><b>Employee Referance Id</b></label>
    <input type="text"  style="width:50%" class="form-control" name="emp_ref_id" id="title" aria-describedby="" placeholder="Enter id">
</div>

<div class="form-group" style="color:black;">
    <label for="title"><b>Employee Name</b></label>
    <input type="text"  style="width:50%" class="form-control" name="emp_name" id="title" aria-describedby="" placeholder="Enter employee name">
</div>
<div class="form-group" style="color:black;">
    <label for="title"><b>Phone Number</b></label>
    <input type="text"  style="width:50%" class="form-control" name="emp_phone_number" id="title" aria-describedby="" placeholder="Enter employee phone number">
</div>


</div>

<div class="col-sm-6">
<div class="form-group" style="color:black;">
    <label for="title"><b>Employee Name</b></label>
    <input type="text"  style="width:50%" class="form-control" name="emp_ref_name" id="title" aria-describedby="" placeholder="Enter name">
</div>

<div class="form-group" style="color:black;">
    <label for="title"><b>Management Guest Id</b></label>
    <input type="text"  style="width:50%" class="form-control" name="manage_guest_Id" id="title" aria-describedby="" placeholder="Enter Management Guest_Id">
</div>

<div class="form-group" style="color:black;">
   
    <input type="hidden"  style="width:50%" class="form-control" name="emp_guest" value="emp_guest" id="title" aria-describedby="" placeholder="Enter Guest Status">
</div>


<div class="form-group" style="color:black;">
    <label for="file"><b>Image</b></label>
    <input type="file"   style="width:50%" class="form-control" name="guest_image" id="guest_image">
</div>


</div>


</div>

</form>


<div class="wsite-form-radio-container">

<label class="wsite-form-label" style="width: 100%; color:blue">Please submit</label><br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</div>

@endsection 

</x-admin-master>
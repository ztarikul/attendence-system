<x-admin-master>
@section('content')
<h1 style="color:blue">Special Guest</h1>

<form  method="post" action="{{route('guest.store')}}" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="category">User ID</label>
<select name="user_id" id="">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
</select>
</div>
<div class="form-group" style="color:black;">
<label for="title"><b>Name</b></label>
<input type="text" style="width:50%" class="form-control" name="name" id="title" aria-describedby="" placeholder="enter name">
</div>

<div class="form-group" style="color:black;">
<label for="title"><b>Phone Number</b></label>
<input type="text"  style="width:50%" class="form-control" name="phone_number" id="title" aria-describedby="" placeholder="enter phone number">
</div>

<div class="form-group" style="color:black;">
<label for="title"><b>Reference Name</b></label>
<input type="text" style="width:50%" class="form-control" name="user_name" id="title" aria-describedby="" placeholder="enter employee name">
</div>

<div class="form-group" style="color:black;">
<label for="file"><b>Image</b></label>
<input type="file"   style="width:50%" class="form-control" name="guest_image" id="guest_image">
</div>




<div class="form-group" style="color:black;">

<input type="hidden"  style="width:50%" class="form-control" name="guest_status" value="special_guest" id="title" aria-describedby="" placeholder="Enter Guest Status">
</div>


<div class="wsite-form-radio-container">

<label class="wsite-form-label" style="width: 100%; color:blue">Please submit</label><br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>



</div>

@endsection 

</x-admin-master>
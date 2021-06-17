<x-admin-master>
@section('content')

<form  method="post" action="{{route('employee.update', $user->id)}}" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
        <label for="title"><b>Name</b></label>
        <input type="text" class="form-control" style="width:70%"  value="{{$user->name}}"  id="title" aria-describedby="" placeholder="enter name">
    </div>

    <div class="form-group">
        <label for="title"><b>Department</b></label>
        <input type="text" class="form-control" style="width:70%" name="department" value="{{$user->department}}" id="title" aria-describedby="" placeholder="enter department">
    </div>
    <div class="form-group">
        <label for="title"><b>Designation</b></label>
        <input type="text" class="form-control"style="width:70%" name="designation" value="{{$user->designation}}" id="title" aria-describedby="" placeholder="enter designation">
    </div>
    <div class="form-group">
        <label for="title"><b>Email</b></label>
        <input type="email" class="form-control" style="width:70%"  name="email" value="{{$user->email}}" id="title" aria-describedby="" placeholder="enter email">
    </div>
    <div class="form-group">
        <label for="title"><b>Phone Number</b></label>
        <input type="text" class="form-control" style="width:70%" name="phone_number" value="{{$user->phone_number}}" id="title" aria-describedby="" placeholder="enter phone number">
    </div>
  </div>


    <div class="col-sm-6">
    <div class="form-group">
        <label for="title"><b>Employee ID</b></label>
        <input type="text" class="form-control" style="width:70%"  value="{{$user->user_ref_id}}" id="title" aria-describedby="" placeholder="enter employee id">
    </div>

    <div class=form-group>
    <img src="/images/{{$user->emp_image}}" alt="">
    </div>
    <div class="form-group">
        <label for="file"><b>Image</b></label>
        <input  name="emp_image" type="file" style="width:70%" class="form-control" id="emp_image">
    </div>
    </div>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
  

</form>

@endsection 

</x-admin-master>
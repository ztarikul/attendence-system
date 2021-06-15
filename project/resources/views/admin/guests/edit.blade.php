<x-admin-master>
@section('content')
<h1>Create</h1>
<form  method="post" action="{{route('guest.update', $guest->id)}}" enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" name="name" value="{{$guest->name}}"  id="title" aria-describedby="" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="title">Reference_id</label>
        <input type="text" class="form-control" name="guest_ref_id" value="{{$guest->guest_ref_id}}" id="title" aria-describedby="" placeholder="Enter id">
    </div>

    <div class=form-group>
    <img src="/images/{{$guest->guest_image}}" alt="">
    </div>
    <div class="form-group">
        <label for="file">Image</label>
        <input  name="guest_image" type="file" class="form-control" id="guest_image">
    </div>
    

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>

@endsection 

</x-admin-master>
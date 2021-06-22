<x-admin-master>
@section('content')
<h1 style="color:blue">Special Guest</h1>

<form  method="post" action="{{route('guest.store')}}" enctype="multipart/form-data">
@csrf
<div class="row">
        <div class="col-sm-6">

        <div class="form-group">
        <label for="category">User ID</label>
        <select name="user_id" id="">
        <option disabled selected value> -- select an option -- </option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}} (ID: {{$user->user_ref_id}} DEPT: {{$user->department}})</option>
                @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="category">User Name</label>
        
        <select name="user_id" id="">
        <option disabled selected value> -- select an option -- </option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->user_ref_id}} (Name: {{$user->name}} DEPT: {{$user->department}})</option>
                @endforeach
        </select>
        </div>


        <div class="form-group" style="color:black;">
        <label for="title"><b>Name</b></label>
        <input type="text" style="width:50%" class="form-control" name="name" id="title" aria-describedby="" placeholder="enter name">
        </div>

        <!-- <div class="form-group" style="color:black;">
        <label for="title"><b>Reference Name</b></label>
        <input type="text" style="width:50%" class="form-control" name="user_name" id="title" aria-describedby="" placeholder="enter employee name">
        </div> -->

        
        <div class="form-group" style="color:black;">
        <label for="title"><b>Reference Name</b></label>
        <input type="text" style="width:50%" class="form-control" name="user_name" id="title" aria-describedby="" placeholder="enter employee name">
        </div>

        <div class="form-group" style="color:black;">
        <label for="title"><b>Phone Number</b></label>
        <input type="text"  style="width:50%" class="form-control" name="phone_number" id="title" aria-describedby="" placeholder="enter phone number">
        </div>


        </div>

        <div class="col-sm-6">

        <div class="form-group" style="color:black;">

        <input type="hidden"  name="guest_status" value="special_guest" >
        </div>
                 <!-- webcam query -->  
                <div id="my_camera"></div> 
                <script language="JavaScript">
                Webcam.set({
                width: 320,
                height: 220,
                image_format: 'jpeg',
                jpeg_quality: 90
                });
                Webcam.attach('#my_camera');
                
                
                function take_snapshot() {
                
                // take snapshot and get image data
                Webcam.snap(function(data_uri){
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                });
                }

                </script>
                <div id="results"></div>
                <div class="form-group">
                <br>
                <input class="btn btn-success" type=button value="Take Snapshot" onClick="take_snapshot()" style="margin:middle;" />
                <input type="hidden" name="guest_image" class="image-tag">
                </div>

        </div>

</div>
        <div class="wsite-form-radio-container">

        <label class="wsite-form-label" style="width: 100%; color:blue">Please submit</label><br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </div>

</form>




@endsection 

</x-admin-master>
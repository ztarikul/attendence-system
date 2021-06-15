<x-admin-master>
    @section('content')


        
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 50px 60px;
  font-size: 12px;
  cursor: pointer;
  margin: 50px 40px 0px 80px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}


</style>
</head>
<body>

@if(auth()->user()->userHasRole('Manager'))


<a href="{{route('guest.employee')}}"><button class="btn">Employee Guest</button></a>
<a href="{{route('guest.management')}}"><button class="btn"> Management Guest</button></a>
<a href="{{route('guest.special')}}"><button class="btn"> Special Guest</button></a>
@endif


@if(auth()->user()->userHasRole('Admin'))



@endif

</body>
</html>













       


    @endsection


</x-admin-master>
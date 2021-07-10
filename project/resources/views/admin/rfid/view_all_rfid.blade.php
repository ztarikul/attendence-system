<x-admin-master>


@section('content')
<div class="row">
  <div class="col-sm-6">
    <form method="post" action="{{route('rfid.store')}}">
    @csrf
    <div class="form-group">
        <label for="title"><b>Create New Rfid</b></label>
        <input type="text" class="form-control" name="rfid" style="width:30%" id="title" aria-describedby="" placeholder="Enter New RFID" required>
        <input type="hidden" name="status" value="available" >
            
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add</button>
    </form>
  </div>
  <div class="col-sm-6">
    <form method="post" action="{{route('rfid.return')}}">
    @csrf
  
    <div class="form-group">
      <label for="title"><b>Return Rfid</b></label>
      <input type="text" class="form-control" name="rfid" style="width:30%" id="title" aria-describedby="" placeholder="Enter Given RFID" required>
      <input type="hidden" name="status" value="available" >
          
    </div>
    <button type="submit" class="btn btn-danger btn-sm">Return Back</button>
    </form>
  </div>
</div>


        
<table class="table table-blue table-striped">
  <thead>
    <tr>

      
      <th scope="col">RFID</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>

     
      
    </tr>
  </thead>
  <tbody>
  @foreach( $rfids as $rfid)
    <tr>
    <!-- @method('DELETE') -->
      
      <td>{{ $rfid->rfid }}</td>
      @if($rfid->status == "busy")
      <td><button class="btn btn-danger btn-sm">{{ $rfid->status}}</button></td>
      @else
      <td><button class="btn btn-success btn-sm">{{ $rfid->status}}</button></td>
      @endif
      <td>{{ $rfid->created_at}}</td>
     
      
      <form method="post" action="{{route('rfid.destroy', $rfid->id)}}">
        @csrf
        @method('DELETE')
        <td><input type="submit" class="btn btn-danger btn-sm" value="Delete"></td>
        
      </form>
     
      

    </tr>
    @endforeach
</table>
@endsection
</x-admin-master>
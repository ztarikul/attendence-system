<x-admin-master>


@section('content')


<!-- Blog Post -->


<table class="table table-blue table-striped">
<thead>
<tr>

<th scope="col">Name</th>
<th scope="col">Refer ID</th>
<th scope="col">Refer Name</th>
<th scope="col">Phone Number</th>
<th scope="col">Image</th>
<th scope="col">Date&Time</th>
</tr>
</thead>
<tbody>

    <tr>
    @foreach($guests as $guest)
      <td>{{$guest->name}}</td>
      <td>{{$guest->user_ref_id}}</td>
      <td>{{$guest->user_name}}</td>
      <td>{{$guest->phone_number}}</td>
        <!-- Button trigger modal -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      <img width="50" height="50" src="/storage/{{$guest->guest_image}}">
      </button></td>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <img width="450" height="400" src="/storage/{{$guest->guest_image}}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      
      <td>{{$guest->created_at}}</td>
     

    </tr>
  @endforeach   

</tbody>
</table>
@endsection
</x-admin-master>
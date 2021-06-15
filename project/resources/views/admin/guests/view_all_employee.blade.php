<x-admin-master>


@section('content')


        <!-- Blog Post -->

        
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Image</th>
      <th scope="col">Created Time</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach( $guests as $guest)
    <tr>
    <!-- @method('DELETE') -->
      <td>{{ $guest->name }}</td>
      <td>{{ $guest->department_name}}</td>
      <td>{{ $guest->designation}}</td>
      <td>{{ $guest->emp_phone_number}}</td>
      <td>{{ $guest->emp_email}}</td>
      <td>{{ $guest->emp_id}}</td>
      <td><img src="/storage/{{$guest->employee_image}}" alt=""></td>
      
      <td>{{ $guest->created_at }}</td>
     
      <td> <a href="{{route('guest.edit', $guest->id) }}"  class='btn btn-primary btn-sm'>Edit</a></td>
      <td> <a href="{{route('guest.destroy', $guest->id)}}" class='btn btn-danger btn-sm'>Delete</a></td>
      

    </tr>
    @endforeach
</table>
@endsection
</x-admin-master>
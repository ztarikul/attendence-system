<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{route('post.create')}}">Create a Post</a>
        <a class="collapse-item" href="{{route('user.posts')}}">Your Posts</a>

        @if(auth()->user()->userHasRole('Admin'))
        <a class="collapse-item" href="{{route('user_all.posts')}}">View All Posts</a>
        <a class="collapse-item" href="{{route('create.role')}}">Create Roles</a>
        <a class="collapse-item" href="{{route('show.roles')}}">All Roles</a>
        <a class="collapse-item" href="{{route('user_role_manage')}}">Users Role Manage</a>

        @endif
        </div>
    </div>
</li>

<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Employee</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            @if(auth()->user()->userHasRole('Admin'))
            <a class="collapse-item" href="{{route('employee.create')}}">Create Employee</a>
            <a class="collapse-item" href="{{route('employee.index')}}">All Employees</a>
            <a class="collapse-item" href="{{route('category.create')}}">Create Categories</a>
            <a class="collapse-item" href="{{route('category.index')}}">View all Categories</a>
            @endif
          </div>
        </div>
      </li>

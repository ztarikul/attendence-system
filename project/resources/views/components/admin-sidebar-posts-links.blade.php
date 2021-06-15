

<!-- Management_sidebar -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Management</span>
  </a>
  <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Management:</h6>
      <!-- @if(auth()->user()->userHasRole('Admin')) -->
      <a class="collapse-item" href="">Create Employee guest</a>
      <a class="collapse-item" href="">Create Management guest</a>
      <a class="collapse-item" href="">Create Special guest</a>
      <!-- @endif -->
    </div>
  </div>
</li>



<!--Admin -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedata" aria-expanded="true" aria-controls="collapseone">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Admin</span>
  </a>
  <div id="collapsedata" class="collapse" aria-labelledby="headingdata" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Admin:</h6>
      <!-- @if(auth()->user()->userHasRole('Admin')) -->
      <a class="collapse-item" href="">Setup For Employee</a>
      <a class="collapse-item" href="">View all employee</a>
      <!-- @endif -->
    </div>
  </div>
</li>

<!-- Report -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedatareport" aria-expanded="true" aria-controls="collapseone">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Report</span>
  </a>
  <div id="collapsedatareport" class="collapse" aria-labelledby="headingdatareport" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Report:</h6>
      <!-- @if(auth()->user()->userHasRole('Admin')) -->
      <a class="collapse-item" href="">Today's Report</a>
      <a class="collapse-item" href="">Random Report</a>
      <!-- @endif -->
    </div>
  </div>
</li>





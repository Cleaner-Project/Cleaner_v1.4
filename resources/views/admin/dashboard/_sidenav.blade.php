
    <nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="user-avatar lg-avatar me-4">
          <img src="{{asset('asset-admin/assets/img/team/profile-picture-3.jpg')}}" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6">Hi, Jane</h2>
          <a href="{{asset('admin/pages/examples/sign-in')}}" class="btn btn-secondary text-dark btn-xs"><span
              class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a  class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{asset('asset-admin/assets/img/brand/light.svg')}}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">Admin Cleaner</span>
        </a>
      </li>
      <li class="nav-item  active ">
        <a href="{{route('dashboard')}}"class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item ">
        <a href="{{route('admin-booking')}}" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
          <span class="sidebar-text">Booking</span>
        </a>
      </li>
      <li class="nav-item ">
      <a href="{{route('list-user')}}" class="nav-link"> 
          <span class="sidebar-icon"><span class="fas fa-user"></span></span>
          <span class="sidebar-text">UserList</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="{{route('create-cleaner')}}" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-user-plus"></span></span>
          <span class="sidebar-text">Create Cleaner</span>
        </a>
      </li>
     
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-components">
          <span>
            <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
            <span class="sidebar-text">Settings</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <!-- <div class="multi-level collapse " role="list"
          id="submenu-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" target="_blank"
                href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">
                <span class="sidebar-text">All Components</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/components/buttons.html">
                <span class="sidebar-text">Buttons</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/components/notifications.html">
                <span class="sidebar-text">Notifications</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/components/forms.html">
                <span class="sidebar-text">Forms</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/components/modals.html">
                <span class="sidebar-text">Modals</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/components/typography.html">
                <span class="sidebar-text">Typography</span>
              </a>
            </li>
          </ul>
        </div> -->
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
      
      
      <li class="nav-item">
        <a href="/"
          class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon"><span class="fas fa-home me-2"></span></span> <span>Home</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
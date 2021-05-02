
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Cleaner<i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
              
							<li class="list-group-item">
                <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item">
            <a class="nav-link" href="{{ route('products.index')}}">
              <span>
              <i class="feather icon-layout"></i>
              </span>
              <span class="pcoded-mtext">Work</span></a>
					</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span>
              <i class="feather icon-layout"></i>
            </span>
            <span class="pcoded-mtext">Page layouts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span>
            <i class="feather icon-layout"></i>
          </span>
          <span class="pcoded-mtext">Page layouts</span></a>
      </li>
			</div>
		</div>
	</nav>

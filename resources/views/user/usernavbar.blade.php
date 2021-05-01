<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      {{-- <h1><a href="{{ route ('/welcome')}}"><span>Cleaner</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto " href="#">Notidication</a></li>
        <li><a class="nav-link scrollto " href="{{route('products.index')}}">Your Buy</a></li>
        <li><a class="nav-link scrollto active" href="#service">service</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li  class="dropdown"><a><span>Your </span></i></a>
          <ul >
            <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                             
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
      </ul>
      </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
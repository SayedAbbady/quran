{{-- <div class="colorbackonly">
  <div class="contacts-number">
    <div class="container">
      <div class="row ">
        <div class="col-sm-6">
          
          <span class="method">hr@qurantalent.com</span>
        </div>
        <div class="col-sm-6 text-lg-right">
          <span class="method-name mainFont">Whatsapp:</span>
          <span class="method d-lg-inline d-block mr-3"> 002 22503 41415</span>
          <span class="method">Skype: 002 22503 41415</span>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
      <a class="navbar-brand " href="/">
        <img src="{{ asset('/assets/img/Artboard 4.svg') }}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li> --}}
          <li class="nav-item {{ Request::path() == 'pricing' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('userPlan')}}">Pricing plans</a>
          </li>
          <li class="nav-item {{ Request::path() == 'contact-us' ? 'active' : '' }}">
            <a class="nav-link" data-scroll href="{{route('contact-us')}}">Contact us</a>
          </li>
          <li class="nav-item {{ Request::path() == 'programs' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('programs')}}">Programs</a>
          </li>
          <li class="nav-item {{ Request::path() == '#About' ? 'active' : '' }}">
            <a class="nav-link" data-scroll href="/home#About">About us</a>
          </li>
          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ Auth::logout() }}">Log out</a>
          </li>
          @else

          <div class="btn-group nav-item" role="group">
            <a id="btnGroupDrop1" class="nav-link" data-toggle="dropdown" aria-haspopup="fales" aria-expanded="true" href="/login">
              Log in
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item disabled text-transform-bold" href="#">Select Role</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="{{route('admin')}}">Student</a>
              <a class="dropdown-item" href="{{route('admin')}}">Teacher</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('admin')}}">Admin</a>
            </div>
          </div>

          @endif
        </ul>
      </div>
    </div>
</nav>
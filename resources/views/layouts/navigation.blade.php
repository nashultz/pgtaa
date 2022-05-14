<nav class="navbar navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><img class="responsive" src="img/Main.svg" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link {{ (request()->routeIs('home*')) ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->routeIs('about*')) ? 'active' : '' }}" href="{{route('about')}}">About</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ (request()->routeIs('news*')) ? 'active' : '' }}" href="{{route('news')}}" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              News
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="{{route('news')}}">What's Happening</a></li>
              <li><a class="dropdown-item" href="{{route('news')}}">Version</a></li>
            </ul>
          </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('videos*')) ? 'active' : '' }}" href="{{route('videos')}}">Videos</a>
                </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ (request()->routeIs('news*')) ? 'active' : '' }}" href="{{route('news')}}" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Store
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Gaming</a></li>
                <li><a class="dropdown-item" href="#">Tech</a></li>
                <li><a class="dropdown-item" href="#">Audio</a></li>
                <li><a class="dropdown-item" href="#">Vape</a></li>
                <!--<li><hr class="dropdown-divider"></li>-->
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
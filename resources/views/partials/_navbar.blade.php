{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() == 'about' ? 'active' : ''}}" aria-current="page" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''}}" aria-current="page" href="{{route('comics')}}">Comics</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> --}}
  <header class="header-content">
    <div>
        <img src="{{Vite::asset('public/images/dc-logo.png')}}" alt="logo-header" />
    </div>
    <div>
        <ul class="list">
            <li>
                <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page">HOME</a>
            </li>
            <li>
                <a href="{{ route('comics') }}" class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}" aria-current="page">COMICS</a>
            </li>
            <li><a href="#">MOVIE</a></li>
            <li><a href="#">TV</a></li>
            
           
            <li>
                <a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}" aria-current="page">ABOUT</a>
            </li>
        </ul>
    </div>

</header>

<nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
    <div class="container">

      <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @auth
      <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('posts.index') }}">Explore</a>
              <a class="dropdown-item" href="{{ route('posts.profil') }}">My Galery</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
          
              <a class="dropdown-item" href="{{ route('posts.create') }}">Create</a>


            </div>
          </li>
        </ul>
      </div>
      @endauth

      <a class="navbar-brand mx-auto order-1 order-md-3" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

      <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdown03">
              @guest
              <li class="nav-item">
              <a class="nav-link" href="{{ route('posts.index') }}">Explore</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                  @endif
              @else
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  <a class="dropdown-item" href="#">
                    Edit Profile
                  </a>
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="page-about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page-contact.html">Contact</a>
          </li>
        </ul>
        <form action="{{ route('search.post') }}" method="get" class="form-inline">
            <input name="query" class="search js-search form-control form-control mr-sm-2 border-primary" type="search" title="Enter search query here.." placeholder="Search.." aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        @endguest
      </div>
    </div>
  </nav>
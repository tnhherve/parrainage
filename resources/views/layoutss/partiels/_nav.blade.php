    <nav class="navbar navbar-expand-md fixed-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('home') }}"><img src="/img/logo2.png" class="rounded-circle img-thumbnail" height="50px" width="50px" alt="Cinque Terre">{{ config('app.name', 'Laravel') }}</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
        <ul class="navbar-nav px-3">

          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
            @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            </li>
            @else

              <!-- <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role=" button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST"   style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li> -->

            <li class="nav-item dropdown text-nowrap">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" role=" button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><img src="/img/avatar7.png"  class="rounded-circle img-thumbnail" height="70px" width="70px" alt="Cinque Terre">{{ Auth::user()->name }}</a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"   style="display: none;">
                            @csrf
                        </form>
              </div>
                
            </li>
          @endguest  
        </ul>
      </div>  
    </nav>

    
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{set_route_active('home')}}" href="{{ route('home') }}">
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <a class="nav-link {{set_route_active('addUser')}}  dropdown-toggle" id="navbarDropdown03" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">
                  <span data-feather="users"></span>
                  Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown03">
                  <a class="dropdown-item" href="{{ route('addUser') }}">
                    <span data-feather="user-plus"></span>
                    Add User</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span data-feather="list"></span>
                    Liste Users</a>
                  
                </div>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <a class="nav-link {{set_route_active('parrainage')}}" href="{{ route('cycle') }}">
                  <span data-feather="calendar"></span>
                  Parrainage
                </a>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <a class="nav-link {{set_route_active('contact')}}" href="{{ route('contact') }}">
                  <span data-feather="mail"></span>
                  Contact
                </a>
              </li>
              
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            
        </nav>

        
        
    <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('home') }}"><img src="/img/logo2.png" class="rounded-circle img-thumbnail" height="50px" width="50px" alt="Cinque Terre">PARATEL</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" id="example" href="#"><img src="/img/avatar7.png" class="rounded-circle img-thumbnail" height="70px" width="70px" alt="Cinque Terre"><span data-feather="chevron-down"></span></a>
            
        </li>
      </ul>
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
                <a class="nav-link dropdown-toggle" id="navbarDropdown03" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">
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
                <a class="nav-link" href="{{ route('cycle') }}">
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

        
        
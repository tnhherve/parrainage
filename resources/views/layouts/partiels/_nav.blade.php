    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PARATEL</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" id="example" href="#"><img src="/img/avatar7.png" class="rounded-circle img-thumbnail" height="70px" width="70px" alt="Cinque Terre"></a>
            
        </li>
      </ul>
    </nav>

    
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{set_route_active('home')}}" href="{{ route('home') }}">
                  <span data-feather="home"></span>
                  <i class="fa fa-home fa-2x"></i>Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" id="navbarDropdown03" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">
                  <span data-feather="file"></span>
                  <i class="fa fa-users fa-2x"></i>Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown03">
                  <a class="dropdown-item" href="#">Ajouter un Utilisateur</a>
                  <a class="dropdown-item" href="#">Liste des utilisateurs</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  <i class="fa fa-american-sign-language-interpreting fa-2x"></i>Parrainage
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{set_route_active('contact')}}" href="{{ route('contact') }}">
                  <span data-feather="users"></span>
                  <i class="fa fa-paper-plane"></i>Contact
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

        
        
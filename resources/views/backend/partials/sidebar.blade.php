  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('backend.home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle fa-2x"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ route('backend.account') }}" class="dropdown-item">
            <i class="fas fa-wrench"></i>&nbspUpdate Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('backend.profile') }}" class="dropdown-item">
            <i class="fa fa-user"></i> &nbsp Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item">
          <i class="fas fa-sign-out-alt"></i>  &nbsp Logout
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt fa-2x"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(imagePath(Auth::user()->profile_image)) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('backend.home') }}" class="nav-link {{ $active_dashboard ?? " "}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link  {{ $active_services ?? ""}}">
              <i class="fab fa-servicestack"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.services') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.services.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $active_projects ?? ""}}">
              <i class="fas fa-project-diagram"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.projects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.projects.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Project</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ $active_teams ?? ""}}">
              <i class="fas fa-users"></i>
              <p>
                Teams
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.teams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All teams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.teams.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $active_images ?? $active_slider ??  ""}}">
             <i class="fas fa-images"></i>
              <p>
                Images
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.sliders') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.sliders.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Images</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link {{ $active_news ?? ""}}">
              <i class="far fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.news') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.news.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add News</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ $active_account ?? ""}}">
              <i class="fas fa-user-alt"></i>
              <p>
                Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('backend.profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.account') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
    
          <li class="nav-item">
            <a href="{{ route('backend.messages') }}" class="nav-link {{ $active_messages ?? " "}}">
              <i class="fas fas fa-bell"> </i>
              <p>
                 &nbspMessages 
              </p>
            </a>
          </li>
  
          <li class="nav-item">
            <a href="{{ route('backend.about') }}" class="nav-link {{ $active_about ?? " "}}">
              <i class="fas fa-address-card"></i>
              <p>
                &nbspSite Setting
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i> 
            <p>&nbsp Logout</p>
            </a>
            
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
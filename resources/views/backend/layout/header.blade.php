<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('Home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="{{ asset('backend/dist/img/fav-icon.png') }}">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="{{ asset('common/img/logo.png') }}">
      </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('backend/dist/img/avatar04.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ ucfirst(Auth::user()->name) }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('backend/dist/img/avatar04.png') }}" class="img-circle" alt="User Image">

                <p>
                  {{ ucfirst(Auth::user()->name) }}
                  <small>{{ App\Role::getRole(Auth::user()->roleid) }}</small>
                  
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Sign out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
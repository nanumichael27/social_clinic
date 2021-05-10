  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link navbar-purple">
      <img src="{{ asset('assets/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="max-height: 27px;">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Storage::exists('profilepicture/'.Auth::user()->id.'.png') ? asset('profilepicture/'.Auth::user()->id.'.png?'.rand())  : asset('dist/img/user.svg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{Auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.orders')}}" class="nav-link">
              <i class="fas fa-plus nav-icon"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.users')}}" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>View Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="nav-link">
              <i class="fa fa-power-off nav-icon"></i>
              <p>{{__('Logout')}}</p>
            </a>
          </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
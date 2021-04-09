<nav class="sb-topnav navbar navbar-expand bg-dark">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('assets/img/logo.png') }}" height="25" alt=""></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <div class="input-group-append">
                    <a class="btn btn-primary" href="#">N{{Auth()->user()->balance}}</a>
                </div>
            </div>
        </form>

        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                            {{ __('Logout')}}
                        </a>
                    </form>                
            </li>
        </ul>
    </nav>
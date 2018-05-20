<a class="navbar-brand not-drawer-item" href="{{ url('/') }}">{{ config('app.name', 'Navbar') }}</a>
<ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item drawer-item">
        <div class="drawer-label text-light">
            <span>{{ config('app.name', 'Navbar') }}</span>
        </div>
    </li>
    <!-- Authentication Links -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @else

    <!-- Navbar items -->
    <li class="nav-item dropdown not-drawer-item">
        <a id="navbarDropdown" class="nav-link dropdown-toggle no-caret navbar-lg-icon" href="#" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fas fa-user-circle"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <div class="dropdown-item">
                <h5><strong>{{ Auth::user()->name }}</strong></h5>
                <h6>{{ Auth::user()->email }}</h6>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                Test
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    
    <!-- Drawer items -->
    <li class="nav-item drawer-item">
        <div class="user-drawer-header">
            <h5><strong>{{ Auth::user()->name }}</strong></h5>
            <h6>{{ Auth::user()->email }}</h6>
        </div>
    </li>
    <div class="drawer-divider"></div>
    <!-- <li class="nav-item drawer-item">
        <div class="drawer-label text-light">
            <span>Label</span>
        </div>
    </li> -->
    <li class="nav-item drawer-item">
        <a class="nav-link" href="{{ route('logout') }}" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" 
            style="display: none;">
            @csrf
        </form>
    </li>
    <div class="drawer-divider"></div>
    @endguest
</ul>
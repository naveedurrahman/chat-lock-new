<nav class="navbar">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('user-asset/images/logo.png') }}" alt=""></i>Chat Lock
    </div>
    <div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0  text-right z-10">
                @auth
                    <div class="navbar_content">
                        <a id="navbarDropdown" class=" " href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile" class="profile" />
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-light" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item ">
                                {{ Auth::user()->name }}
                            </div>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('admin.showprofile') }}">
                                {{ __('Settings') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</nav>

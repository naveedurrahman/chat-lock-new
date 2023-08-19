<nav class="navbar navbar-expand-md">
    <div class="logo_item">
        {{-- <i class="bx bx-menu-alt-right" id="sidebarOpen"></i> --}}
        <img src="{{ asset('assets/images/logo.png') }}" alt=""></i>Chat lock
    </div>
    <div class="search_bar">
        <input type="text" placeholder="Search" />
    </div>

    <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell'></i>
        <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
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
</nav>

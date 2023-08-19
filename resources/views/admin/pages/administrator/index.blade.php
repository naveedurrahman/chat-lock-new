@extends('admin.main')
@section('content')
    <div class="container-xl">
        <!-- Your home page content goes here -->
        @if (session('success'))
            <div class=" alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('destroy'))
            <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('destroy') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="boxes">

            <div class="title">Adminstrator
                <div class="search-field">
                    <input type="text" placeholder="Search for any service...">
                    <span class="material-symbols-outlined search-btn"><i class='bx bx-search'></i></span>
                </div>
            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">

                <table class="table">
                    @foreach ($user as $item)
                        <tbody class="m-2">
                            <tr>
                                <th scope="col">
                                    <img src="{{ asset($item->image) }}" class="shadow-1-strong rounded-circle"
                                        alt="avatar 1" style="width: 55px; height: 55px;">
                                </th>
                                <td scope="col" style=" flex-direction: column;">
                                    <br>
                                    <span class="mt-1">{{ $item->name }}</span>
                                </td>
                                <td scope="col">
                                    <br>
                                    <span class="mt-1">{{ $item->email }}</span>
                                </td>
                                <td scope="col">
                                    <br>
                                    <span class="mt-1">{{ $item->number }}</span>
                                </td>

                                <td scope="col">
                                    <form action="{{ route('adminstrator.destroy', $item->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger mt-2">DELETE</button>
                                    </form>
                                </td>


                            </tr>
                        </tbody>
                    @endforeach
                </table>



                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- sidebar -->

    </div>
    <nav class="sidebar-1">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
                <!-- start -->

                <!-- end -->
            </ul>

            <ul class="menu_items">
                <div class="menu_title menu_editor">Adminstrator</div>

                <hr>
                <li class="item">
                    <a href="{{ route('adminstrator.create') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-plus'></i>
                        </span>
                        <span class="navlink">New Adminstrator</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('adminstrator.index') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-user"></i>
                        </span>
                        <span class="navlink">All Adminstrator</span>
                    </a>
                </li>

                <!-- End -->
                <!-- <li class="item">
                                                                                                                                                                                                                                                                                                  <div href="#" class="nav_link submenu_item">
                                                                                                                                                                                                                                                                                                    <span class="navlink_icon">
                                                                                                                                                                                                                                                                                                      <i class="bx bx-home-alt"></i>
                                                                                                                                                                                                                                                                                                    </span>
                                                                                                                                                                                                                                                                                                    <span class="navlink">Home</span>
                                                                                                                                                                                                                                                                                                    <i class="bx bx-chevron-right arrow-left"></i>
                                                                                                                                                                                                                                                                                                  </div>

                                                                                                                                                                                                                                                                                                  <ul class="menu_items submenu">
                                                                                                                                                                                                                                                                                                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                                                                                                                                                                                                                                                                                                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                                                                                                                                                                                                                                                                                                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                                                                                                                                                                                                                                                                                                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                                                                                                                                                                                                                                                                                                  </ul>
                                                                                                                                                                                                                                                                                                </li> -->
                <!-- end -->

                <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
                <!-- start -->

            </ul>
            {{-- <hr>
            <ul class="menu_items">
                <div class="menu_title menu_setting"></div>

                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-message-edit'></i>
                        </span>
                        <span class="navlink">Reports</span>
                    </a>
                </li>

            </ul> --}}

            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expand</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> Collapse</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>
    </nav>
@endsection

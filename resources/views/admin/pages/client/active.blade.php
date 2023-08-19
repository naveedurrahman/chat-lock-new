@extends('admin.main')
@section('content')
    <div class="container-xl">
        <!-- Your home page content goes here -->
        <div class="boxes">

            <div class="title">Active Client
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

                    <tbody class="m-2">
                        <tr>
                            <th scope="col">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                    class="shadow-1-strong rounded-circle" alt="avatar 1"
                                    style="width: 55px; height: auto;">
                            </th>
                            <td scope="col" style=" flex-direction: column;">Alika
                                <span class="mt-1">12345</span>
                            </td>
                            <td scope="col">
                                Chat
                                <br>
                                <span class="mt-1">15</span>
                            </td>
                            <td scope="col">Active
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col">Block
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col"><button type="button" class="btn btn-outline-success p-1"
                                    style="border-radius: 22px;">Active</button></td>
                        </tr>
                    </tbody>

                    <tbody class="m-2">
                        <tr>
                            <th scope="col">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                    class="shadow-1-strong rounded-circle" alt="avatar 1"
                                    style="width: 55px; height: auto;">
                            </th>
                            <td scope="col" style=" flex-direction: column;">Alika
                                <span class="mt-1">12345</span>
                            </td>
                            <td scope="col">
                                Chat
                                <br>
                                <span class="mt-1">15</span>
                            </td>
                            <td scope="col">Active
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col">Block
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col"><button type="button" class="btn btn-outline-success p-1"
                                    style="border-radius: 22px;">Active</button></td>
                        </tr>
                    </tbody>

                    <tbody class="m-2">
                        <tr>
                            <th scope="col">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                    class="shadow-1-strong rounded-circle" alt="avatar 1"
                                    style="width: 55px; height: auto;">
                            </th>
                            <td scope="col" style=" flex-direction: column;">Alika
                                <span class="mt-1">12345</span>
                            </td>
                            <td scope="col">
                                Chat
                                <br>
                                <span class="mt-1">15</span>
                            </td>
                            <td scope="col">Active
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col">Block
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col"><button type="button" class="btn btn-outline-success p-1"
                                    style="border-radius: 22px;">Active</button></td>
                        </tr>
                    </tbody>

                    <tbody class="m-2">
                        <tr>
                            <th scope="col">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                    class="shadow-1-strong rounded-circle" alt="avatar 1"
                                    style="width: 55px; height: auto;">
                            </th>
                            <td scope="col" style=" flex-direction: column;">Alika
                                <span class="mt-1">12345</span>
                            </td>
                            <td scope="col">
                                Chat
                                <br>
                                <span class="mt-1">15</span>
                            </td>
                            <td scope="col">Active
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col">Block
                                <br>
                                <span class="mt-1">150+</span>
                            </td>

                            <td scope="col"><button type="button" class="btn btn-outline-success p-1"
                                    style="border-radius: 22px;">Active</button></td>
                        </tr>
                    </tbody>

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
                <div class="menu_title menu_editor">Client</div>
                <!-- duplicate these li tag if you want to add or remove navlink only -->
                <!-- Start -->
                <hr>
                <li class="item">
                    <a href="{{ route('client.create') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-plus'></i>
                        </span>
                        <span class="navlink">New Client</span>
                    </a>
                </li>

                <li class="item">
                    <a href="{{ route('client.index') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-user'></i>
                        </span>
                        <span class="navlink">All Clients</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('client.activeclient') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-user-plus"></i>
                        </span>
                        <span class="navlink">Active Clients</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('client.inactiveclient') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-user-minus'></i>
                        </span>
                        <span class="navlink">Inactive Clients</span>
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
            <hr>
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

            </ul>

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

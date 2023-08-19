@extends('admin.main')
@section('content')
    <div class="container-xl">
         @if (session('message'))
            <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                   {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Your home page content goes here -->
        <div class="boxes">
       
            <div class="title">Active Agent
                <div class="search-field">
                    <input type="text" placeholder="Search for any service...">
                    <span class="material-symbols-outlined search-btn"><i class='bx bx-search'></i></span>
                </div>
            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">

   @if ($active->isEmpty())
            <div style="display: flex;justify-content:center;">

                <p class="alert-success" style="padding: 20px;text-transform:capitalize;width:100%;text-align:center;">No
                    Active agents available.</p>
            </div>
        @else
                <table class="table">

                    <tbody class="m-2">
                        @foreach ($active as $item)
                            <tr>
                                <th scope="col">
                                    <img src="{{ $item->image }}" class="shadow-1-strong rounded-circle img-fluid"
                                        alt="avatar 1" style="width: 60px; height: 60px; object-fit: cover;">
                                </th>
                                <td scope="col" style=" flex-direction: column;">
                                    <span class="mt-1">{{ $item->name }}</span>
                                </td>

                                <td scope="col" style=" flex-direction: column;">
                                    <span class="mt-1">{{ $item->email }}</span>
                                </td>

                                <td scope="col">
                                   
                                        @if ($item->status == '1')
                                            <button type="submit" class="btn btn-outline-success p-1"
                                                style="border-radius: 22px;">Active</button>
                                      
                                        @endif
                                   
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
@endif


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
                <div class="menu_title menu_editor">Agent</div>
                <!-- duplicate these li tag if you want to add or remove navlink only -->
                <!-- Start -->
                <hr>
                <li class="item">
                    <a href="{{ route('agent.create') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-plus'></i>
                        </span>
                        <span class="navlink">New Agent</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('agent.index') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-user'></i>
                        </span>
                        <span class="navlink">All Agents</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('agent.activeagent') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-user-plus"></i>
                        </span>
                        <span class="navlink">Active Agents</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('agent.inactiveagent') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-user-minus'></i>
                        </span>
                        <span class="navlink">Inactive Agents</span>
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

@extends('admin.main')
@section('content')
    <div class="container-xl">
        <!-- Your home page content goes here -->
        <div class="boxes">

            <div class="title">Create New Agent

            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">

                <div class="agent-box">
                    <div class="container-xxl subadmins">
                        <div class="row">
                            <div class="col-6">
                                <h6>Images</h6>
                                <div class="card-2">
                                    <h4>Upload Files</h4>
                                    <div class="drop_box">
                                        <header>
                                            <h4>Select File here</h4>
                                        </header>
                                        <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
                                        <label class="file-label">
                                            <input type="file" accept=".doc,.docx,.pdf" class="file-input">
                                            Choose File
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <h6>Name</h6>
                                <div class="search_ba">
                                    <input type="text" placeholder="Alarm wixx">
                                </div>


                                <button type="button" class="btn btn-outline-success p-2 my-4" style="border-radius: 25px;"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Asign Numbers
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Chose A Number</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>
                                                <span><input type="checkbox" class="mr-2"> <a
                                                        href="">123456789</a></span>
                                                <hr>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary w-100">confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-3">
                                <h6>Email</h6>
                                <div class="search_ba">
                                    <input type="text" placeholder="wix@gmail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl my-5 ml-5">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-outline-info" style="border-radius: 22px;">
                                <a href="{{ route('agent.index') }}" class="text-dark text-decoration-none">Cancel</a>
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary mt-2 ml-3"
                                style="border-radius: 22px;">Confirm</button>
                        </div>
                    </div>
                </div>


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

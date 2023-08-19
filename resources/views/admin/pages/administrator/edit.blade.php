@extends('admin.main')
@section('content')
    <div class="container-xl">
        <!-- Your home page content goes here -->
        @if ($errors->any())
            <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="boxes">

            <div class="title">Create New Sub Adminstrator

            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">

                <form action="{{ route('adminstrator.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
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
                                                <input type="file" name="image" class="file-input">
                                                Choose File
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6>Name</h6>
                                    <div class="search_ba">
                                        <input type="text" value="{{ $user->name }}" name="name"
                                            placeholder="Alarm wixx">
                                    </div>

                                </div>
                                <div class="col-3">
                                    <h6>Email</h6>
                                    <div class="search_ba">
                                        <input type="text" value="" name="email" placeholder="wix@gmail.com">
                                    </div>
                                    <p class="d-flex align-item-center justify-content-between my-3">Phone</p>
                                    <div class="search_ba">
                                        <input type="number" name="number" placeholder="+92">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl my-5 ml-5">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-info " style="border-radius: 22px;"><a
                                        href="{{ route('adminstrator.index') }}"
                                        class="text-dark text-decoration-none">Cancel</a></button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary mt-2 ml-3"
                                    style="border-radius: 22px;">create</button>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>

            </div>
        </div>
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
                <li class="item ">
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

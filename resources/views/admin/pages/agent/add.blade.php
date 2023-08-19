@extends('admin.main')
@section('content')
    <div class="container-xl">
        @if (session('message'))
            <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Your home page content goes here -->
        <div class="boxes">

            <div class="title">Create New Agent

            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">
                <form method="post" action="{{ route('agent.store') }}" enctype="multipart/form-data">
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
                                            <p>

                                                <button id="cancel-image"
                                                    style="display: none; margin-bottom: 5px; padding: 5px 10px 5px 10px; font-size: 20px;border: none;font-weight:20px;background-color:black;border-radius:50%;color:white;"
                                                    >x</button>
                                                <img id="image-preview" src="#" alt="Image Preview"
                                                    style="display: none; max-width: 100%; max-height: 100% ;object-fit:cover; ">

                                            </p>

                                            <label class="file-label">
                                                <input type="file" name="image" class="file-input" id="image-input">
                                                Choose File
                                            </label>

                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-3">
                                    <h6>Name</h6>
                                    <div class="search_ba">

                                        <input type="text" name="name" placeholder="Alarm wixx"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="button" class="btn btn-outline-success p-2 my-4"
                                        style="border-radius: 25px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Assign Numbers

                                    </button> <br>
                                    @error('number_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Choose a Number</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <span class="anchor">Select Numbers</span>
                                                    <ul class="items">
                                                        @if ($data->isEmpty())
                                                            <label for="" style="text-transform: capitalize;"
                                                                class="alert alert-danger">No
                                                                Numbers
                                                                availible right Now </label>
                                                        @else
                                                            @foreach ($data as $item)
                                                                <li style="list-style:none;padding:5px;"> <input
                                                                        type="checkbox" name="number_id[]"
                                                                        value="{{ $item->id }}"
                                                                        id="number-{{ $item->id }}">

                                                                    <span class="form-check-label"
                                                                        for="number-{{ $item->id }}">

                                                                        <label for=""
                                                                            style="text-transform: capitalize;">{{ $item->number }}</label>

                                                                    </span>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6>Email</h6>
                                    <div class="search_ba">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            placeholder="wix@gmail.com">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="container-xxl my-5 ml-5" style="display: flex;justify-content:flex-end;">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-info" style="border-radius: 22px;">
                                    <a href="{{ route('agent.index') }}" class="text-dark text-decoration-none">Cancel</a>
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-outline-success"
                                    style="border-radius: 22px;">Confirm</button>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('image-input');
        const imagePreview = document.getElementById('image-preview');
        const cancelImageBtn = document.getElementById('cancel-image');

        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    cancelImageBtn.style.display = 'inline-block';
                };

                reader.readAsDataURL(this.files[0]);
            }
        });

        cancelImageBtn.addEventListener('click', function() {
            imageInput.value = ''; // Clear the selected file
            imagePreview.src = '';
            imagePreview.style.display = 'none';
            cancelImageBtn.style.display = 'none';
        });
    });
</script>

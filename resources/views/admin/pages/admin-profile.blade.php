@extends('admin.main')
@section('content')
    <div class="container-xl">
        <!-- Your home page content goes here -->
        <div class="boxes">

            <div class="title"><button type="button" class="btn"
                    style="background: rgb(106, 148, 106); border-radius: 20px; "><a href="{{ route('admin.dashboard') }}"
                        style="color: antiquewhite;">Go Back</a></button>
            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                style="position: relative; height: auto">
                <div class="container-xxl subadmins">
                    <div class="row text-center">
                        <div class="col">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                class="shadow-1-strong rounded-circle" alt="avatar 1" style="width: 80px; height: auto;">

                            <h6 class="font-weight-bold my-4">Alika Mayer</h6>
                        </div>



                    </div>

                </div>

                <hr>
                <div class="container-xxl subadmins my-4 ml-5">
                    <div class="row">
                        <div class="col-6">

                            <h6 class="font-weight-bold ">Name</h6>
                            <div class="search_ba" style="position: relative;">
                                <input type="text" placeholder="alika@mayer.com"><i class='bx bxs-edit font-weight-bold'
                                    style="position: absolute; left: 195px; top: 13px; color: dodgerblue;"></i>
                            </div>

                        </div>
                        <div class="col-6 ">
                            <h6 class="font-weight-bold">Email</h6>
                            <div class="search_ba" style="position: relative;">
                                <input type="text" placeholder="alika@gmail.com"><i class='bx bxs-edit font-weight-bold'
                                    style="position: absolute; left: 195px; top: 13px; color: dodgerblue;"></i>

                            </div>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-6 mt-3">
                            <h6 class="font-weight-bold">Phone Number</h6>
                            <div class="search_ba" style="position: relative;">
                                <input type="text" placeholder="398398395"><i class='bx bxs-edit font-weight-bold'
                                    style="position: absolute; left: 195px; top: 13px; color: dodgerblue;"></i>

                            </div>
                        </div>
                        <div class="col-6">

                            <button type="button" class="btn btn-outline-primary"
                                style="border-radius: 22px; padding: 4px 32px; margin-top: 60px;">Submit</button>

                        </div>




                    </div>


                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

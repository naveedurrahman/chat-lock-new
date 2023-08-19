@extends('admin.main')
@section('content')



    <div class="container-xl">


        <!-- Your home page content goes here -->
        <div class="boxes">

            <div class="title">Online Number
                <div class="search-field">

                    <input type="text" placeholder="Search for any service...">

                    <span class="material-symbols-outlined search-btn"><i class='bx bx-search'></i></span>
                </div>
            </div>

        </div>
        <div class="boxes box-2">
            <div class="card-body perfect-scrollbar ps ps--active-y d-flex align-items-center justify-content-end"
                style="position: relative; height: auto">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="border-radius: 22px;">Add Number</button>
                <i class='bx bx-dots-vertical'></i>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <p> {{ session('success') }}</p>
                </div>
            @endif
            <!-- modal -->


            <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel"
                aria-hidden="false">
                <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable"
                    style="max-width: 50%;max-height: 70vh;">
                    <div class="modal-content" style="height: 50vh;">
                        <div class="modal-header" style="background-color: #4f39f9; color: white;">
                            <h4>Add Number</h4>
                            <i class='bx bxs-x-circle' data-bs-dismiss="modal" style='color:#f33e07; font-size: 33px;'></i>

                        </div>
                        <form action="{{ route('number.store') }}" method="POST">
                            @csrf
                            <div class="modal-body" style="text-align: center;justify-content: center;margin-top: 25px; ">
                                <h5>Add Whatsapp Number</h5>
                                <div class="row my-0">

                                    <div class="col-8 mt-10px">
                                        <input type="number" name="number" class="form-control bg-light"
                                            style="border-radius: 18px;text-align: center;justify-content: center;margin-left: 140px; margin-top: 22px;"
                                            placeholder="Enter Whatsapp Number" aria-label="Whatsapp Number">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="justify-content: center;">
                                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btn btn-primary w-40" style="border-radius: 20px;">Save</button>
                                <!-- <button type="button" class="btn btn-secondary" style="border-radius: 20px;" data-bs-dismiss="modal">Close</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- end modal -->

        <!-- second modal -->
        <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable"
                style="max-width: 50%;max-height: 70vh;">
                <div class="modal-content" style="height: 50vh;">
                    <div class="modal-header" style="background-color: #4f39f9; color: white;">
                        <h4>Add Number</h4>
                        <i class='bx bxs-x-circle' data-bs-dismiss="modal" style='color:#f33e07; font-size: 33px;'></i>

                    </div>
                    <div class="modal-body" style="text-align: center;justify-content: center;margin-top: 25px; ">
                        <h5>Add Whatsapp Number</h5>
                        <div class="row my-0">

                            <div class="col-8 mt-10px">
                                <input type="number" class="form-control bg-light"
                                    style="border-radius: 18px;text-align: center;justify-content: center;margin-left: 140px; margin-top: 22px;"
                                    placeholder="Enter Whatsapp Number" aria-label="Whatsapp Number">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: center;">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-primary w-40" style="border-radius: 20px;">Save</button>
                        <!-- <button type="button" class="btn btn-secondary" style="border-radius: 20px;" data-bs-dismiss="modal">Close</button> -->

                    </div>
                </div>
            </div>
        </div>

        <!-- end -->
        @if ($data->isEmpty())
            <div style="display: flex;justify-content:center;">

                <p class="alert-success" style="padding: 20px;text-transform:capitalize;width:100%;text-align:center;">No
                    data available.</p>
            </div>
        @else
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Number</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->number }}</td>
                            <td>

                                <form action="{{ route('number.status', ['change' => $item->status, 'id' => $item->id]) }}"
                                    method="POST">
                                    @csrf
                                    @if ($item->status == '1')
                                        <button type="submit" class="btn btn-outline-success p-1"
                                            style="border-radius: 22px;">Active</button>
                                    @elseif($item->status == '0')
                                        <button type="submit" class="btn btn-outline-danger p-1"
                                            style="border-radius: 22px;">unactive</button>
                                    @endif
                                </form>

                            </td>
                            <td>
                                <div style="display: flex;justify-content:flex-start;">
                                    <a href="{{ route('number.edit', ['id' => $item->id]) }}"
                                        class="btn btn-link ml-2 p-1 text-success " style="text-decoration: none;">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action=" {{ route('number.delete', ['id' => $item->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-link ml-2 p-1 text-danger"
                                            style="text-decoration: none;">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif


        <!--
                                                                                                            <div class="ps__rail-x" style="left: 0px; bottom: 200px;">
                                                                                                              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                                                                            </div> -->
    </div>
    </div>
    </div>
@endsection

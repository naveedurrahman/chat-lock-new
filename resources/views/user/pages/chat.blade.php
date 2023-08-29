@extends('user.main')
@section('content')
    <div class="container">
        <div class="container-xll">
            <div class="boxes">

                <div class="title">
                    <h3>Asign Number List</h3>
                </div>

            </div>
            <div class="boxes box-2 resbox">
                <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
                    style="position: relative; height: auto">


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Index</th>
                                <th scope="col">Number</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="pt-4">1</td>
                                <td class="pt-4">03109794986</td>
                                <td data-label="Action">
                                    <a href="" class="btn btn-info">Chat</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>



            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>

        </div>
    </div>
@endsection

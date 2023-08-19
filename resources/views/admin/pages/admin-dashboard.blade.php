@extends('admin.main')
@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="row" style="margin-left: -300px;">
                <div class="col-3">
                    <div
                        style="background: white; display: flex; flex-direction: column; padding: 20px; border-radius: 12px;">

                        <h6 class="title" style="color: black;"> <i class="bx bx-user"
                                style="background: rgb(240, 238, 114); padding: 4px; border-radius: 50%;"></i> Total
                            Admin <i class='bx bx-question-mark'
                                style="border: 2px solid #555; padding: 2px; border-radius: 50%;"></i></h6>

                        <h4 style="font-weight: 600;">1500</h4>
                    </div>
                </div>
                <div class="col-3">
                    <div
                        style="background: white; display: flex; flex-direction: column; padding: 20px; border-radius: 12px;">

                        <h6 class="title"> <i class="bx bx-user"
                                style="background: rgb(138, 236, 108); padding: 4px; border-radius: 50%;"></i> Total
                            Clients <i class='bx bx-question-mark'
                                style="border: 2px solid #555; padding: 2px; border-radius: 50%;"></i></h6>

                        <h4 style="font-weight: 600;">143</h4>
                    </div>
                </div>
                <div class="col-3">
                    <div
                        style="background: white; display: flex; flex-direction: column; padding: 20px; border-radius: 12px;">

                        <h6 class="title"> <i class='bx bxs-chat'
                                style=" color: rgb(247, 169, 69); font-size: 24px; padding: 4px; border-radius: 50%;"></i>
                            </class=>
                            Total
                            Agents <i class='bx bx-question-mark'
                                style="border: 2px solid #555; padding: 2px; border-radius: 50%;"></i></h6>

                        <h4 style="font-weight: 600;">1560</h4>
                    </div>
                </div>
                <div class="col-3">
                    <div
                        style="background: white; display: flex; flex-direction: column; padding: 20px; border-radius: 12px;">

                        <h6 class="title"> <i class="bx bx-user"
                                style="background: rgb(252, 238, 53); padding: 2px; border-radius: 50%;"></i> Total
                            Upload <i class='bx bx-question-mark'
                                style="border: 2px solid #555; padding: 2px; border-radius: 50%;"></i></h6>

                        <h4 style="font-weight: 600;">2450</h4>
                    </div>
                </div>

            </div>

            <!-- second row -->
            <div class="row" style="margin-left: -300px; ">


                <div class="col-4 mt-3 ">
                    <div
                        style="background: rgb(255, 255, 255); flex-direction: column; height: 220px; padding: 20px; border-radius: 12px;">

                        <h5 class="title">Contact (Number)</h5>
                        <div class="d-flex gap-5">
                            <div class="d-flex mt-5">
                                <h1 style="margin-left: 20px;">15</h1>
                                <i class='bx bx-trending-up'
                                    style="color: forestgreen; font-size: 32px; margin: 0 10px;"></i>
                                <h6 style="color: darkgreen; margin-top: 10px;">55%</h6>

                                <span style="margin-top: 60px; margin-left: -120px;">All Contact</span>
                            </div>
                            <div class="d-flex mt-5">
                                <h1 style="margin-left: 20px;">400</h1>
                                <i class='bx bx-trending-up'
                                    style="color: forestgreen; font-size: 32px; margin: 0 10px;"></i>
                                <h6 style="color: darkgreen; margin-top: 10px;">25%</h6>

                                <span style="margin-top: 60px; margin-left: -120px;">Total Contact</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4 mt-3 ">
                    <div
                        style="background: rgb(255, 255, 255); flex-direction: column; height: 220px; padding: 20px; border-radius: 12px;">

                        <h5 class="title">Activity (Client)</h5>
                        <div class="d-flex gap-5">
                            <div class="d-flex mt-4">
                                <img src="{{ asset('assets/images/img_excel_chart_intro_1.svg') }}" style="width: 160px;"
                                    alt="">
                            </div>
                            <div class="d-flex mt-4">
                                <img src="{{ asset('assets/images/download (1).png') }}" style="width: 100px;"
                                    alt="">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-4 mt-3 ">
                    <div
                        style="background: rgb(255, 255, 255); flex-direction: column; height: 220px; padding: 20px; border-radius: 12px;">

                        <h5 class="title my-2">Client (Recently Added)</h5>
                        <table class="table mt-3">

                            <tbody>

                                <tr>
                                    <th scope="row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                            class="shadow-1-strong rounded" alt="avatar 1"
                                            style="width: 35px; height: auto;">
                                    </th>
                                    <td>Alika
                                    </td>
                                    <td><i class="bx bxl-whatsapp-square"
                                            style="color: darkgreen; font-size: 22px; margin: 0 2px;"></i>Chat Pakeg

                                    </td>
                                    <td><i class='bx bxs-message-rounded-dots' style="color: blue; font-size: 22px;"></i>
                                        Users

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                            class="shadow-1-strong rounded" alt="avatar 1"
                                            style="width: 35px; height: auto;">
                                    </th>
                                    <td>Alika
                                        <br>

                                    </td>
                                    <td><i class="bx bxl-whatsapp-square"
                                            style="color: darkgreen; font-size: 22px; margin: 0 2px;"></i>Chat Pakeg

                                    </td>
                                    <td><i class='bx bxs-message-rounded-dots' style="color: blue; font-size: 22px;"></i>
                                        Users

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

            <div class="row" style="margin-left: -300px;">
                <div class="col-7">
                    <div class=" mt-5 " style=" background-color: white; border-radius: 25px; height: 450px;">
                        <img src="{{ asset('assets/images/chart.png') }}" alt=""
                            style="width: 90%; height: 90%; margin: 10px 0;">
                    </div>
                </div>
                <div class="col-5">
                    <table class="table mt-5 "
                        style=" background-color: white; border-radius: 15px; padding: 20px; height: 450px;">


                        <tr class="pt-5">
                            <th class="mt-4 font-weight-bold" style="margin-top: 12px;"><span
                                    class="font-weight-bold">Phonenumbers(country)</span></th>
                        </tr>
                        <tr>
                            <th scope="col">country</th>
                            <th scope="col">code </th>
                            <th scope="col">status</th>
                            <th scope="col">Status</th>
                        </tr>

                        <tbody>
                            <tr class="pt-4">
                                <th scope="row"><img
                                        src="{{ asset('assets/images/Flag-United-States-of-America.webp') }}"
                                        width="40px" height="40px" style="border-radius: 25px;" alt="">
                                </th>
                                <td>Bahrain</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{ asset('assets/images/download (2).png') }}"
                                        width="40px" height="40px" style="border-radius: 25px;" alt=""></th>
                                <td>pakistan</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{ asset('assets/images/download (3).png') }}"
                                        width="40px" height="40px" style="border-radius: 25px;" alt=""></th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>





        </div>
    </div>
@endsection

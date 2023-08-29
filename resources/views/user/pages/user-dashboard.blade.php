@extends('user.main')
@section('content')
<div class="container">
    <div class="container-fluid">
      <h3 class="fw-bold">Overview</h3>
      <div class=" d-flex gap-2 res-gap2" style="display: flex; flex-wrap: wrap;">
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Send Message</h6>
            <i class='bx bx-message-alt-check'
              style="color: rgb(16, 182, 174); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>15</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Deliverd Message</h6>
            <i class='bx bx-check'
              style="color: rgb(16, 182, 174); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>20</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Read Message</h6>
            <i class='bx bx-message-detail'
              style="color: rgb(173, 106, 66); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>25</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Replied</h6>
            <i class='bx bx-message-detail'
              style="color: rgb(13, 34, 33); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>8</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Sending Msg</h6>
            <i class='bx bx-share bx-flip-horizontal'
              style="color: rgb(28, 31, 30); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>15</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Field Msg</h6>
            <i class='bx bx-message-square-x'
              style="color: rgb(196, 79, 32); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>30</h2>
        </div>
        <div class="col-4 col-lg-2 gap-4" style="background: #fff; border-radius: 4px; padding: 12px;">
          <div style="display: flex;">
            <h6>Send Message</h6>
            <i class='bx bx-message-alt-check'
              style="color: rgb(16, 182, 174); margin-left: 20px; margin-top: 12px; font-size: 22px;"></i>
          </div>
          <h2>15</h2>
        </div>
      </div>
    </div>

    <div class="container-xll">
      <div class="boxes">

        <div class="title">
          <h3>Brodcast List</h3>
          <div class="search-field">

            <input type="text" class="border-0" placeholder="Search for any service...">

          </div>

        </div>

      </div>
      <div class="boxes box-2 resbox">
        <div class="card-body perfect-scrollbar ps ps--active-y" data-mdb-perfect-scrollbar="true"
          style="position: relative; height: auto">


          <table class="table">
            <thead>
              <tr>
                <th  scope="col">Brodcast Name</th>
                <th  scope="col">Schudeled</th>
                <th  scope="col">Succesful</th>
                <th  scope="col">Read</th>
                <th  scope="col">Replied</th>
                <th  scope="col">Recepient</th>
                <th scope="col">Failed</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>
              <tr>
                <td data-label="Brodcast Name" scope="row" class="pt-4">Untitle</td>
                <td data-label="Schudeled" class="pt-4">28/01/23
                  <br>
                  18:35
                </td>
                <td data-label="Succesful">
                  <section>
                    <div class="circle-wrap">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>

                </td>
                <td data-label="Read">
                  <section>
                    <div class="circle-wrap-2">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>

                <td data-label="Replied">
                  <section>
                    <div class="circle-wrap-3">
                      <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                      </div>
                    </div>
                  </section>
                </td>
                <td class="pt-4" data-label="Recepient">20 Contact</td>
                <td class="pt-4" data-label="Faild">0 contact</td>
                <td class="pt-4" data-label="Status" style="color: darkcyan;">completed</td>
                <td data-label="Action"></td>
              </tr>

            </tbody>
          </table>


        </div>
      </div>



      <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
      </div>

    </div>
    <div class="container-xll" >


      <div class="row lastSec">


        <div class="col-6 mt-3 col restable">
          <div
            style="background: rgb(255, 255, 255); flex-direction: column; height: auto; padding: 20px; border-radius: 12px;">

            <h5 class="title">Recent (Chat)
              <div class="search-field">
                <input type="text" placeholder="Search for any service...">
                <span class="material-symbols-outlined search-btn"><i class="bx bx-search"></i></span>
              </div>
            </h5>
            <table class="table mt-4">

              <tbody>
                <tr>
                  <td class="fw-bold">Agent</td>
                  <td class="fw-bold">Number</td>
                  <td class="fw-bold">Activity</td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                      class="shadow-1-strong rounded-circle m-2" alt="avatar 1" style="width: 40px; height: auto;">
                    &nbsp; Alika
                  </th>
                  <td class="pt-4">+1234567</td>
                  <td><button type="button" class="btn btn-outline-warning mt-2" style="border-radius: 25px;"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Cheating
                    </button></td>
                  <td class="pt-3"><button type="button" class="btn btn-outline-primary" disabled=""
                      style="border-radius: 22px;">View</button></td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                      class="shadow-1-strong rounded-circle m-2" alt="avatar 1" style="width: 40px; height: auto;">
                    &nbsp; Alika
                  </th>
                  <td class="pt-4">+1234567</td>
                  <td><button type="button" class="btn btn-outline-warning mt-2" style="border-radius: 25px;"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Cheating
                    </button></td>
                  <td class="pt-3"><button type="button" class="btn btn-outline-primary" disabled=""
                      style="border-radius: 22px;">View</button></td>
                </tr>


              </tbody>
            </table>
          </div>

        </div>
        <div class="col-3 mt-3 col restable">
          <div
            style="background: rgb(255, 255, 255); flex-direction: column; height: auto; padding: 20px; border-radius: 12px;">

            <h5 class="title fw-bold mt-1"> Contact (History)</h5>

            <h6 class="mt-4" style="color: darkturquoise;"><i class="bx bx-check"
                style="color: #fff; background: rgb(35, 133, 172); border-radius: 50%; margin-top: 12px; font-size: 22px;"></i>
              &nbsp; On
              Track</h6>

            <div style=" display: flex; flex-direction: column; padding: 10px; border-radius: 12px;">

              <h6 class="title" style="color: black;"> Chat Count <button type="button" class="btn btn-outline-warning"
                  disabled style="border-radius: 20px;">300</button></h6>
            </div>
            <div style=" display: flex; flex-direction: column; padding: 10px; border-radius: 12px;">

              <h6 class="title" style="color: black;"> Chat Count <button type="button" class="btn btn-outline-warning"
                  disabled style="border-radius: 20px;">300</button></h6>
            </div>
            <div style=" display: flex; flex-direction: column; padding: 10px; border-radius: 12px;">

              <h6 class="title" style="color: black;"> Chat Count <button type="button" class="btn btn-outline-warning"
                  disabled style="border-radius: 20px;">300</button></h6>
            </div>

          </div>
        </div>
        <div class="col-3 mt-3 col restable">
          <div
            style="background: rgb(255, 255, 255); flex-direction: column; height: auto; padding: 20px; border-radius: 12px;">



            <h5 class="title my-2">Leads</h5>

            <div class="search-field" style="padding: 4px;">
              <input type="text" placeholder="Search for any service..." style="border: 0; background: azure;">
              <span style="background: rgb(115, 148, 115); padding: 7px 12px; color: #fff; font-weight: 600;">7</span>
            </div>

            <div class="d-flex my-4">
              <i class='bx bx-phone-call mt-1' style="color: rgb(54, 174, 179); font-size: 22px;" ></i>
              <span style="margin-left: 50px; font-weight: 600;">123456789</span>
            </div>
            <div class="d-flex my-3">
              <i class='bx bx-phone-call mt-1' style="color: rgb(54, 174, 179); font-size: 22px;" ></i>
              <span style="margin-left: 50px; font-weight: 600;">123456789</span>
            </div>

            <div class="d-flex my-3">
              <i class='bx bx-phone-call mt-1' style="color: rgb(54, 174, 179); font-size: 22px;" ></i>
              <span style="margin-left: 50px; font-weight: 600;">123456789</span>
            </div>

            <div class="d-flex my-3">
              <i class='bx bx-phone-call mt-1' style="color: rgb(54, 174, 179); font-size: 22px;" ></i>
              <span style="margin-left: 50px; font-weight: 600;">123456789</span>
            </div>



          </div>

        </div>


      </div>

    </div>
  </div>
@endsection

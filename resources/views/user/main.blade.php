<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.include.head')
</head>

<body>
    <!-- navbar -->
    @include('user.include.header')
    <!-- sidebar -->
    @include('user.include.sidebar')
    <!-- --------------- -->
    @yield('content')

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    </div>


    </div>


    </div>
    <!-- JavaScript -->
    <script src="{{ asset('user-asset/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>

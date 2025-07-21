<!DOCTYPE html>
<html lang="en">

<head>
    <title>Internet of Things</title>
    @include('layouts.partials.head')
</head>

<body class="overflow-x-hidden">

    <!-- page wrapper start -->
    <div class="page-wrapper min-h-screen">

        <!-- preloader start -->
        <div id="ht-preloader">
            <div class="loader clear-loader">
                <span></span>
                <p style="color: #e59000; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Nice</p>
            </div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        @include('layouts.partials.navbar')
        <!--header end-->

        @include('iot.section.about')

        @include('iot.section.service')

        @include('iot.section.team')

        @include('layouts.partials.footer')

    </div>
    <!-- page wrapper end -->

    <!--back-to-top start-->
    {{-- Sementara nonaktifkan biar tidak menutupi konten --}}
    {{-- <div class="scroll-top"><a class="smoothscroll bg-success" href="#top"><i class="las la-angle-up"></i></a></div> --}}
    <!--back-to-top end-->

    <a href="https://wa.me/6281281109795"
        class="btn btn-success rounded-circle shadow d-flex align-items-center justify-content-center"
        style="position: fixed; bottom: 20px; right: 20px; width: 50px; height: 50px; z-index: 1050;">
        <i class="bi bi-whatsapp" style="font-size: 28px;"></i>
    </a>
    <!-- inject js start -->
    @include('layouts.partials.foot')
    <!-- inject js end -->

    @yield('content')
</body>

</html>
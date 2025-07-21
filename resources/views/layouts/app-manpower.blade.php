<!DOCTYPE html>
<html lang="en">

<head>
    <title>Man Power Supply</title>
    @include('layouts.partials.head')
</head>

<body class="overflow-x-hidden">

    <!-- page wrapper start -->
    <div class="page-wrapper min-h-screen">

        <!--header start-->
        @include('layouts.partials.navbar')
        <!--header end-->

        <!--hero section start-->
        @include('manpower.section.about')
        <!--hero section end-->

        <!--vision mission section start-->
        @include('manpower.section.advantage')
        <!--vision mission section end-->

        <!--footer section start-->
        @include('layouts.partials.footer')
        <!--footer section end-->

    </div>
    <!-- page wrapper end -->

    <!--back-to-top start-->
    {{-- <div class="scroll-top"><a class="smoothscroll bg-success" href="#top"><i class="las la-angle-up"></i></a></div> --}}
    <!--back-to-top end-->

    <a href="https://wa.me/6281281109795"
        class="btn btn-success rounded-circle shadow d-flex align-items-center justify-content-center"
        style="position: fixed; bottom: 20px; right: 20px; width: 50px; height: 50px; z-index: 1050;">
    <i class="bi bi-whatsapp" style="font-size: 28px;"></i>
</a>


    

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nidha Training Center</title>
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

        <!--hero section start-->
        @include('training-center.section.hero')
        <!--hero section end-->

        <!--vision mission section start-->
        @include('training-center.section.vision-mission')
        <!--vision mission section end-->

        <!--training section start-->
        @include('training-center.section.training')
        <!--training section end-->

        <!--trainer section start-->
        @include('training-center.section.trainer')
        <!--trainer section end-->

        <!--footer section start-->
        @include('layouts.partials.footer')
        <!--footer section end-->

    </div>
    <!-- page wrapper end -->

    <!--back-to-top start-->
    <div class="scroll-top"><a class="smoothscroll" style="background-color: #e59000;" href="#top"><i class="las la-angle-up"></i></a></div>
    <!--back-to-top end-->

    <!-- inject js start -->
    @include('layouts.partials.foot')
    <!-- inject js end -->

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nidha Cipta Edotama</title>
    @include('layouts.partials.head')
</head>

<body>

    <!-- page wrapper start -->
    <div class="page-wrapper">

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
        @include('section.hero')
        <!--hero section end-->

        <!--training section start-->
        @include('section.training')
        <!--training section end-->

        <!--body content start-->
        <div class="page-content">

            <!--about start-->

            @include('section.man-power')

            <!--about end-->

            <!--team start-->

            @include('section.team')

            <!--team end-->

            <!--blog start-->

            @include('section.partner')

            <!--blog end-->

        </div>
        <!--body content end-->

        <!--footer start-->
        @include('layouts.partials.footer')
        <!--footer end-->
        
    </div>
    <!-- page wrapper end -->

    <!--back-to-top start-->
    <div class="scroll-top"><a class="smoothscroll" style="background-color: #e59000;" href="#top"><i class="las la-angle-up"></i></a></div>
    <!--back-to-top end--> 

    <!-- inject js start -->
    @include('layouts.partials.foot')
    <!-- inject js end -->

    @yield('content')

</body>
</html>
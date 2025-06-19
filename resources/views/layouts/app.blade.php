<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nidha Cipta Edutama</title>
    @include('layouts.partials.head')
</head>

<body>

    <!-- page wrapper start -->
    <div class="page-wrapper">

        <!-- preloader start -->
        <div id="ht-preloader">
            <div class="loader clear-loader">
                <span></span>
                <p class="text-success">Nice</p>
            </div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        @include('layouts.partials.navbar')
        <!--header end-->

        <!--hero section start-->
        @include('section.hero')
        <!--hero section end-->

        <!--clients section start-->
        @include('section.training')
        <!--clients section end-->

        <!--body content start-->
        <div class="page-content">

            <!--services start-->

            @include('section.service')

            <!--services end-->

            <!--portfolio start-->

            @include('section.portfolio')

            <!--portfolio end-->

            <!--about start-->

            @include('section.about')

            <!--about end-->

            <!--counter start-->

            @include('section.counter')

            <!--counter end-->


            <!--team start-->

            @include('section.team')

            <!--team end-->

            <!--blog start-->

            @include('section.contact')

            <!--blog end-->

        </div>
        <!--body content end-->

        <!--footer start-->
        @include('layouts.partials.footer')
        <!--footer end-->
        
    </div>
    <!-- page wrapper end -->

    <!--back-to-top start-->
    <div class="scroll-top"><a class="smoothscroll bg-success" href="#top"><i class="las la-angle-up"></i></a></div>
    <!--back-to-top end-->

    <!-- inject js start -->
    @include('layouts.partials.foot')
    <!-- inject js end -->

    @yield('content')

</body>
</html>
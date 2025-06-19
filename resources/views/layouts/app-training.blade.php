<!DOCTYPE html>
<html lang="en">

<head>
    <title>Training Center Nidha</title>
    @include('layouts.partials.head')
</head>

<body>

    <div class="page-wrapper">

        {{-- Preloader (optional) --}}
        <div id="ht-preloader">
            <div class="loader clear-loader">
                <span></span>
                <p class="text-success">Nidha</p>
            </div>
        </div>

        {{-- Navbar khusus halaman training --}}
        @include('layouts.partials.navbar-training')

        {{-- Langsung panggil section-section di sini --}}
        @include('cp-nidha.section.hero')
        @include('cp-nidha.section.training')
        @include('cp-nidha.section.trainer')
        @include('cp-nidha.section.contact')
        @include('cp-nidha.section.footer')

    </div>

    {{-- Back to Top --}}
    <div class="scroll-top"><a class="smoothscroll bg-success" href="#top"><i class="las la-angle-up"></i></a></div>

    @include('layouts.partials.foot')

</body>
</html>

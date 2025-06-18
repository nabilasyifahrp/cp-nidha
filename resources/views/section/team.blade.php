<section id="team">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                <div class="mb-8">
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold mb-3">
                        Grootech Team
                    </span>
                    <h2 class="mt-3 font-w-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.2rem;">
                        A Squad of Talented Members
                    </h2>
                    <p class="lead mb-0">
                        We worked with the most talented people around the world, taking full advantage
                        of remote work to deliver the best results for your business.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="swiper team-carousel">
            <div class="swiper-wrapper">
                @foreach($teams as $team)
                    <div class="swiper-slide">
                        <div class="portfolio-item grootech-team position-relative overflow-hidden text-center p-5">
                            <div class="mb-3">
                                <img class="img-fluid rounded-top" src="{{ asset('assets/images/team/01.png') }}" alt="{{ $team->name }}">
                            </div>
                            <div>
                                <h6 class="mb-1">{{ $team->name }}</h6>
                                <small class="text-muted mb-3 d-block">{{ $team->position }}</small>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-facebook h4"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-dribbble h4"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-twitter h4"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-linkedin h4"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    new Swiper('.team-carousel', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        }
    });
</script>

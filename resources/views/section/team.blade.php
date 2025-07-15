<section id="team" class="pt-5 pb-5 bg-white">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Teams</h2>
            <p style="color: #7c3f1d;">Meet our professional team.</p>
        </div>

        <div class="d-none d-md-block">
            <div id="teamCarouselDesktop" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($teams->chunk(3) as $chunkIndex => $teamChunk)
                        <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center g-4">
                                @foreach ($teamChunk as $team)
                                    <div class="col-md-4">
                                        <div class="text-center p-3 team-card">
                                            <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3"
                                                style="max-width: 180px;">
                                            <h5 class="fw-bold mb-1">{{ $team->name }}</h5>
                                            <p class="text-muted mb-0">{{ $team->position }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev custom-carousel-control" type="button"
                    data-bs-target="#teamCarouselDesktop" data-bs-slide="prev">
                    <span class="fs-2 text-dark">&#10094;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-carousel-control" type="button"
                    data-bs-target="#teamCarouselDesktop" data-bs-slide="next">
                    <span class="fs-2 text-dark">&#10095;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="d-block d-md-none mt-4">
            <div id="teamCarouselMobile" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    @foreach ($teams as $index => $team)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="team-card p-3">
                                <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3"
                                    style="max-width: 180px;">
                                <h5 class="fw-bold mb-1">{{ $team->name }}</h5>
                                <p class="text-muted mb-0">{{ $team->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev custom-carousel-control" type="button"
                    data-bs-target="#teamCarouselMobile" data-bs-slide="prev">
                    <span class="fs-2 text-dark">&#10094;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-carousel-control" type="button"
                    data-bs-target="#teamCarouselMobile" data-bs-slide="next">
                    <span class="fs-2 text-dark">&#10095;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .team-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: scale(1.05);
    }

    .custom-carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        z-index: 2;
    }

    .carousel-control-prev.custom-carousel-control {
        left: -70px;
    }

    .carousel-control-next.custom-carousel-control {
        right: -70px;
    }

    @media (max-width: 768px) {
        .carousel-control-prev.custom-carousel-control {
            left: -20px;
        }

        .carousel-control-next.custom-carousel-control {
            right: -20px;
        }
    }
</style>

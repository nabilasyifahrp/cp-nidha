<section id="team" class="pt-5 pb-5 bg-white">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Teams</h2>
            <p style="color: #7c3f1d;">Meet our professional team.</p>
        </div>

        <!-- DESKTOP VERSION -->
        <div class="d-none d-md-block">
            <div id="teamCarouselDesktop" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card"style="transition: transform 0.3s ease;"
                                onmouseover="this.style.transform='scale(1.05)';"
                                onmouseout="this.style.transform='scale(1)';">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Idham Mashar</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Dwi Isnanto</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Andi Muhammad</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Nama Keempat</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Nama Kelima</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 team-card">
                                    <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                                    <h5 class="fw-bold mb-1">Nama Keenam</h5>
                                    <p class="text-muted mb-0">Instruktur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Panah Desktop -->
                <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#teamCarouselDesktop" data-bs-slide="prev">
                    <span class="fs-2 text-dark">&#10094;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#teamCarouselDesktop" data-bs-slide="next">
                    <span class="fs-2 text-dark">&#10095;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- MOBILE VERSION -->
        <div class="d-block d-md-none mt-4">
            <div id="teamCarouselMobile" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">

                    <!-- Satu per slide -->
                    <div class="carousel-item active">
                        <div class="team-card p-3">
                            <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                            <h5 class="fw-bold mb-1">Idham Mashar</h5>
                            <p class="text-muted mb-0">Instruktur</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-card p-3">
                            <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                            <h5 class="fw-bold mb-1">Dwi Isnanto</h5>
                            <p class="text-muted mb-0">Instruktur</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-card p-3">
                            <img src="{{ asset('assets/images/team/icon.png') }}" class="img-fluid mb-3" style="max-width: 180px;">
                            <h5 class="fw-bold mb-1">Andi Muhammad</h5>
                            <p class="text-muted mb-0">Instruktur</p>
                        </div>
                    </div>
                    <!-- Tambah slide lain jika perlu -->

                </div>

                <!-- Panah Mobile -->
                <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#teamCarouselMobile" data-bs-slide="prev">
                    <span class="fs-2 text-dark">&#10094;</span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#teamCarouselMobile" data-bs-slide="next">
                    <span class="fs-2 text-dark">&#10095;</span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
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
            left: -8px;
        }

        .carousel-control-next.custom-carousel-control {
            right: -8px;
        }
    }
</style>

<style>
    .contact-btn {
        color: #f69433;
        border: 2px solid #f69433;
        background-color: transparent;
    }

    .contact-btn:hover {
        background-color: #f69433;
        color: white;
    }
</style>
<section class="position-relative px-2 py-5" style="background: linear-gradient(to right, #ffb624, #ffe493);">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="position-relative rounded-4 overflow-hidden mx-auto" style="width: 85%; height: 500px;">
                    <img src="{{ asset('assets/images/hero/training.jpg') }}" class="w-100 h-100 object-fit-cover"
                        alt="Training Center">
                    <div class="position-absolute bottom-0 start-0 w-100"
                        style="background: rgba(0, 0, 0, 0.4); padding: 2rem;">
                        <div class="ps-5">
                            <h3 class="text-white fw-bold mb-3">Training Center</h3>
                            <a href="#training" class="btn fw-bold px-4 py-2 contact-btn rounded-pill">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="position-relative rounded-4 overflow-hidden mx-auto" style="width: 85%; height: 500px;">
                    <img src="{{ asset('assets/images/hero/man-power.jpg') }}" class="w-100 h-100 object-fit-cover"alt="Man Power Supply">
                    <div class="position-absolute bottom-0 start-0 w-100"
                        style="background: rgba(0, 0, 0, 0.4); padding: 2rem;">
                        <div class="ps-5">
                            <h3 class="text-white fw-bold mb-3">Man Power Supply</h3>
                            <a href="#training" class="btn fw-bold px-4 py-2 contact-btn rounded-pill">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="position-relative rounded-4 overflow-hidden mx-auto" style="width: 85%; height: 500px;">
                    <img src="{{ asset('assets/images/hero/iot.jpg') }}" class="w-100 h-100 object-fit-cover"
                        alt="IoT Solutions">
                    <div class="position-absolute bottom-0 start-0 w-100"
                        style="background: rgba(0, 0, 0, 0.4); padding: 2rem;">
                        <div class="ps-5">
                            <h3 class="text-white fw-bold mb-3">Internet of Things</h3>
                            <a href="#training" class="btn fw-bold px-4 py-2 contact-btn rounded-pill">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev position-absolute top-50 translate-middle-y -start-3" type="button"
            data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="fs-2 text-dark">&#10094;</span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next position-absolute top-50 translate-middle-y -end-3" type="button"
            data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="fs-2 text-dark">&#10095;</span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

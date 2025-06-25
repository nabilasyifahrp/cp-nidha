{{-- <section id="portfolio">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold mb-3 d-inline-block">
                    Portfolio
                </span>
                <h2 class="font-w-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.2rem;">
                    We’ve completed various projects, let’s <br class="d-none d-lg-block">take a look at some of them here
                </h2>
            </div>
            <div class="col-lg-6">
                <p id="typing-text" class="lead text-muted mb-0 px-lg-3"></p>
            </div>
        </div>

        <h3 class="text-center text-success fw-bold mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem;">Projects</h3>
        <div class="row popup-gallery mb-5">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="portfolio-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    <div class="portfolio-title d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-light mb-2">Project</small>
                            <h6>
                                <a class="btn-link text-white" href="portfolio-single.html" style="text-decoration: none;">
                                    {{ $project->title }}
                                </a>
                            </h6>
                        </div>
                        <a class="popup-img h2 text-white" href="{{ asset('storage/' . $project->thumbnail) }}">
                            <!-- <i class="la la-plus"></i> -->
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <h3 class="text-center text-success fw-bold mt-5 mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem;">Testimonials</h3>
        <div class="row popup-gallery">
            @foreach($testimonials as $testi)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="portfolio-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $testi->image) }}" alt="{{ $testi->name }}">
                    <div class="portfolio-title d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-light mb-2">Testimonial</small>
                            <h6>
                                <a class="btn-link text-white" href="portfolio-single.html" style="text-decoration: none;">
                                    {{ $testi->testi }}
                                </a>
                            </h6>
                            <p class="text-white">- {{ $testi->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    const text = "Every company needs reliable access to development resources. At Grootech, we provide the flexibility to choose the solutions that best fit your business needs.";
    const speed = 40;
    const delay = 5000;
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("typing-text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        } else {
            setTimeout(() => {
                document.getElementById("typing-text").innerHTML = "";
                i = 0;
                typeWriter();
            }, delay);
        }
    }

    window.onload = typeWriter;
</script> --}}

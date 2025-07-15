<section id="adventage" class="pt-10 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Man Power Supply</h2>
            <p style="color: #7c3f1d;">Why choose us?</p>
        </div>

        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6">
                <div class="border-5 p-6 rounded-4 shadow-sm" style="background-color: #004c71; border-left: 8px solid;">
                    <h3 class="fw-bold text-white mb-3"><u></u>Man Power Supply</h3>
                    <p class="mb-4 text-white" style="text-align: justify;">
                        Guided by competent and experienced mentors, Nidha Cipta Edutama consistently produces skilled
                        professionals in their fields.
                        With structured materials and a comfortable training environment, participants can learn in a
                        conducive atmosphere that enhances understanding.
                    </p>
                    <a href="{{ route('manpower.index') }}" class="btn btn-dark rounded-pill px-4 py-2 transition">Read More</a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/advantage/advantage1.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" />
            </div>
        </div>

        <div class="row text-center g-4">
            @foreach ($advantages as $advantage)
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/advantage/advantage' . (($loop->index % 3) + 2) . '.png') }}"class="mb-3" style="height: 140px;">
                    <h5 class="fw-bold">{{ $advantage->title }}</h5>
                    <p class="text-muted">{{ $advantage->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

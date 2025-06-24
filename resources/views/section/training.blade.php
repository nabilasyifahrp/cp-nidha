<section id="training" class="pt-10 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Nidha Training Center</h2>
            <p style="color: #7c3f1d;">Why choose us?</p>
        </div>

        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/training/training1.png') }}" alt="Training Illustration"
                    class="img-fluid" style="max-width: 100%; height: auto;" />
            </div>
            <div class="col-lg-6">
                <div class="bg-warning-subtle border-start border-5 border-warning p-6 rounded-4 shadow-sm"
                    style="background-color: #fff3da; border-left: 8px solid #e59000;">
                    <h3 class="fw-bold text-dark mb-3"><u></u>Nidha Training PLC</h3>
                    <p class="mb-4 text-dark-emphasis" style="text-align: justify;">
                        Guided by competent and experienced mentors, Nidha Cipta Edotama consistently produces skilled
                        professionals in their fields.
                        With structured materials and a comfortable training environment, participants can learn in a
                        conducive atmosphere that enhances understanding.
                    </p>

                    <a href="#training" class="btn btn-dark rounded-pill px-4 py-2 transition">Read More</a>
                </div>
            </div>
        </div>

        <div class="row text-center g-4">
            @foreach ($trainings as $training)
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/training/training' . (($loop->index % 3) + 2) . '.png') }}" class="mb-3" style="height: 140px;">
                    <h5 class="fw-bold">{{ $training->title }}</h5>
                    <p class="text-muted">{{ $training->description }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>

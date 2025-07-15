<section id="team" class="py-10" style="background: white;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Our Partners</h2>
            <p style="color: #7c3f1d;">We work with the best partners.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($partners as $partner)
                <div class="col-6 col-md-3 text-center mb-4">
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->logo }}" class="img-fluid mb-2"
                        style="max-width: 150px;">
                </div>
            @endforeach
        </div>
    </div>
</section>

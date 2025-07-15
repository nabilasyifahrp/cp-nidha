<section id="team" class="py-10 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Profesional Teams</h2>
        </div>

        <div class="row justify-content-center g-4">
            @foreach ($teams as $team)
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <img src="{{ asset('assets/images/iot/team.png') }}" class="img-fluid mb-3"
                            style="max-width: 180px;">
                        <h5 class="fw-bold mb-1">{{ $team->name }}</h5>
                        <p class="text-muted mb-0"><span class="fw-bold">Expertise: </span>{{ $team->expertise }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

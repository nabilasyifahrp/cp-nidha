<section class="py-20">
    <div class="container">
        <h3 class="text-center mb-10 fw-bold text-dark">What Our Advantages?</h3>
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

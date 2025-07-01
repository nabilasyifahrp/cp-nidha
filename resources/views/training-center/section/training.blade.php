<style>
    .training-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .training-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px rgba(130, 32, 0, 0.2);
        z-index: 2;
    }
</style>

<section class="py-5 bg-white" style="font-family: 'Poppins', sans-serif;">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="color: #822000; font-size: 2rem;">
            Training
        </h2>
        <p class="fw-semibold mb-5" style="font-size: 1.25rem;">
            We really appreciate your time, therefore the training schedule can be arranged <br>
            according to the participants' wishes.
        </p>

        <div class="row justify-content-center">
            @foreach ($trainings as $training)
            <div class="col-md-4 mb-4">
                <div class="training-card p-4 rounded-5 shadow-lg border border-light-subtle h-100"
                    style="background-color: #fef9f6;">
                    <img src="{{ asset('storage/' . $training->image) }}" class="img-fluid mb-3"
                        style="max-height: 130px;" alt="{{ $training->title }}">
                    <h5 class="fw-bold mb-2" style="color: #8B4513;">{{ $training->title }}</h5>
                    <p style="text-align: justify;">{{ $training->description }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
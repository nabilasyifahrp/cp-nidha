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
        <h2 class="fw-bold mb-3" style="color: #9d4e1c; font-size: 2rem;">
            Meet Our Best Trainer
        </h2>
        <p class="fw-semibold mb-5" style="font-size: 1.25rem;">
            The quality of our trainers has been tested in various national and multinational companies, so that the knowledge and experience they share will produce a comprehensive understanding of the ins and outs of the industrial automation process.
        </p>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-5 mb-4">
                <div class="training-card p-4 rounded-5 shadow-lg border border-light-subtle h-100 mx-auto"
                    style="background-color: #fef9f6; max-width: 280px;">
                    <img src="{{ asset('assets/images/team/01.png') }}" class="img-fluid mb-3"
                        style="max-height: 180px; object-fit: contain;" alt="Trainer Image">
                    <h5 class="fw-bold mb-2 text-center" style="color: #864f2e;">Didi Tri Wibowo</h5>
                    <p class="text-center" style="font-size: 0.95rem;">
                        Expertise: Programming, Upgrade & Modification, IO Test & Commissioning
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-5 mb-4">
                <div class="training-card p-4 rounded-5 shadow-lg border border-light-subtle h-100 mx-auto"
                    style="background-color: #fef9f6; max-width: 280px;">
                    <img src="{{ asset('assets/images/team/01.png') }}" class="img-fluid mb-3"
                        style="max-height: 180px; object-fit: contain;" alt="Trainer Image">
                    <h5 class="fw-bold mb-2 text-center" style="color: #864f2e;">Didi Tri Wibowo</h5>
                    <p class="text-center" style="font-size: 0.95rem;">
                        Expertise: Programming, Upgrade & Modification, IO Test & Commissioning
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
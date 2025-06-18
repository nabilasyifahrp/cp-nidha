<style>
    .client-logo {
        transition: transform 0.3s ease;
    }

    .client-logo:hover {
        transform: scale(1.1);
    }
</style>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<section id="clients" class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-10 col-lg-8">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold mb-3">
                    Clients
                </span>
                <h2 class="mt-3 font-w-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.2rem;">Our Trusted Clients</h2>
                <p class="lead mb-0">Proud to work with amazing companies.</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center g-4">
            @foreach ($clients as $client)
                <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center align-items-center">
                    <img class="client-logo img-fluid"
                         style="width: 10rem;"
                         src="{{ asset('storage/' . $client->image) }}"
                         alt="Logo Client {{ $client->name }}"
                         data-aos="zoom-in"
                         data-aos-duration="600"
                         loading="lazy" />
                </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        once: false,
    });
</script>
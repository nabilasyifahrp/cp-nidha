<style>
  @media (max-width: 767.98px) {
    .card-mobile-small {
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
  }
</style>

<section class="pt-10 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">What We Do?</h2>
    <div class="row g-4">
      @foreach($services as $service)
      <div class="col-md-6 col-lg-4">
        <div class="card card-mobile-small h-100 border-0 shadow rounded-4 p-3"
            style="transition: all 0.3s ease;"
            onmouseover="this.style.transform='scale(1.05)';"
            onmouseout="this.style.transform='scale(1)';">
          <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="card-img-top rounded-top-4" alt="Power Monitoring">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $service->title }}</h5>
            <p class="card-text text-justify">{{ $service->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- <style>
    @media (max-width: 576px) {
        .grootech-team-filter-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .grootech-team-filter-wrapper::-webkit-scrollbar {
            display: none;
        }

        .grootech-team-filter {
            flex-wrap: nowrap !important;
            min-width: max-content;
            justify-content: flex-start !important;
        }

        .grootech-team-filter button {
            flex: 0 0 auto;
        }

        .text-justify {
            text-align: justify;
        }
    }

    @media (min-width: 577px) {
        .grootech-team-filter {
            justify-content: center !important;
        }

        .text-justify {
            text-align: justify;
        }
    }
</style>

<section id="services">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                <div class="mb-8">
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold mb-3">
                        What We Offered
                    </span>
                    <h2 class="mt-3 font-w-5" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.2rem;">
                        Advanced Customer Service Platform
                    </h2>
                    <p class="lead mb-0">
                        Grootech IoT Solution integrates with your factory area devices and device connections to gain insight into the data collected and your devices to make better business decisions.
                    </p>
                </div>
            </div>
        </div>

        <!-- Filter Buttons -->
        <div class="d-flex justify-content-center">
            <div class="grootech-team-filter-wrapper px-2">
                <div class="portfolio-filter grootech-team-filter d-flex gap-2 py-2">
                    <button data-filter=".cat1" class="btn filter-btn is-checked">IoT Solution</button>
                    <button data-filter=".cat2" class="btn filter-btn">Manufacturing Software</button>
                    <button data-filter=".cat3" class="btn filter-btn">Asset Management</button>
                    <button data-filter=".cat4" class="btn filter-btn">Enterprise</button>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="grid columns-3 row popup-gallery">
                        <div class="grid-sizer"></div>
                        @foreach($products as $product)
                            @php
                                $categoryName = optional($product->category)->category ?? '';
                                $categoryClass = match($categoryName) {
                                    'IoT Solution' => 'cat1',
                                    'Manufacturing Software' => 'cat2',
                                    'Asset Management' => 'cat3',
                                    'Enterprise' => 'cat4',
                                    default => '',
                                };
                                
                                $features = preg_split('/\.\s*/', strip_tags($product->description), -1, PREG_SPLIT_NO_EMPTY);

                            @endphp

                            <div class="grid-item col-lg-4 col-md-6 mb-5 {{ $categoryClass }}">
                                <div class="card border-0 shadow h-100">
                                    <div class="card-body py-8 px-6 d-flex flex-column justify-content-between">
                                        <div class="text-center mb-4">
                                            <span class="badge text-dark shadow">
                                                <span class="h6 text-uppercase">{{ $product->title }}</span>
                                            </span>
                                        </div>
                                        <div class="mb-4 text-center">
                                            <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                                        </div>
                                        <ul class="list-unstyled mb-4">
                                            @foreach ($features as $feature)
                                                @if (trim($feature) !== '')
                                                    <li class="d-flex align-items-start justify-content-between">
                                                        <span>{{ trim($feature) }}</span>
                                                        <i class="la la-check text-primary fw-bold ms-2"></i>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

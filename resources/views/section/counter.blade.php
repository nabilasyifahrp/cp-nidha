<style>
    @media (max-width: 768px) {
        .mobile-counter-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .mobile-counter-grid .counter {
            margin-bottom: 0 !important; 
        }
    }
</style>

<section>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 mb-8 mb-lg-0 position-relative">
                <img src="assets/images/about/05.png" alt="Image" class="img-fluid">  
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="row text-center mobile-counter-grid">
                    <div class="col-lg-6 col-md-6">
                        <div class="counter bg-success rounded p-5 shadow">
                            <div class="counter-desc text-white">
                                <h5>Project</h5>
                                <span class="count-number display-4" data-to="23" data-speed="10000">23</span>
                                <span class="display-4">k</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="counter bg-white rounded p-5 shadow">
                            <div class="counter-desc">
                                <h5>Member</h5>
                                <span class="count-number display-4 text-success" data-to="69"
                                    data-speed="10000">69</span>
                                <span class="display-4 text-primary">k</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                        <div class="counter bg-white rounded p-5 shadow">
                            <div class="counter-desc">
                                <h5>Love Us</h5>
                                <span class="count-number display-4 text-success" data-to="45"
                                    data-speed="10000">45</span>
                                <span class="display-4 text-primary">k</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="counter bg-success rounded p-5 shadow">
                            <div class="counter-desc text-white">
                                <h5>Happy Client</h5>
                                <span class="count-number display-4" data-to="89" data-speed="10000">89</span>
                                <span class="display-4">k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
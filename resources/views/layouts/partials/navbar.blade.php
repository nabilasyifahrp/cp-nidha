<style>
    .hover-green:hover {
        color: #198754 !important;
    }
</style>

<header class="site-header bg-white shadow-sm sticky-top py-2">
<div id="header-wrap">
    <div class="container">
        <!--menu start-->
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand d-flex align-items-center" href="index.html" style="font-size: 2rem;">
                <img src="assets/images/about/grootech.png" class="me-2" width="55" height="60" alt="Grootech Logo">
                <span class="text-success fw-normal">Groo</span><span class="text-secondary fw-normal">tech.</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center gap-lg-3 me-lg-3">
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-medium hover-green" href="#team">Team</a></li>
                </ul>
                <a class="btn btn-success d-none d-lg-inline-block px-4 py-2 rounded-pill" href="#contact" style="font-size: 0.95rem;">
                    Contact Us
                </a>
                <a class="btn btn-success mt-3 d-lg-none w-100 py-2 rounded-pill" style="font-size: 14px;" href="#contact">
                    Contact Us
                </a>
            </div>
        </nav>
        <!--menu end-->
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.getElementById('navbarNav');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false
                });
                bsCollapse.hide();
            });
        });
    });
</script>
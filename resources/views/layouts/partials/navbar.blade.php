<style>
    .nav-hover:hover {
        color: #f69433 !important;
        background-color: transparent;
    }

    .dropdown-menu .nav-hover:hover {
        background-color: transparent !important;
        color: #000;
    }

    .contact-btn {
        color: #f69433;
        border: 2px solid #f69433;
        background-color: transparent;
    }

    .contact-btn:hover {
        background-color: #f69433;
        color: white;
    }
</style>
<header class="site-header bg-white shadow-lg sticky-top px-4">
    <div id="header-wrap">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand d-flex align-items-center" href="">
                    <img src="assets/images/logo_perusahaan/nice.png" width="65" height="65" alt="Nice Logo">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center gap-lg-3 me-lg-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold nav-hover" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark fw-bold nav-hover" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-hover" href="{{ route('training.center') }}">Training Center</a></li>
                                <li><a class="dropdown-item nav-hover" href="{{ route('manpower.index') }}">Man Power Supply</a></li>
                                <li><a class="dropdown-item nav-hover" href="{{ route('iot') }}">Internet of Things</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="https://wa.me/6281281109795"
                                class="btn fw-bold px-4 py-2 contact-btn rounded-pill ms-lg-2 mt-2 mt-lg-0">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .navbar-nav .dropdown-item');
    const navbarCollapse = document.getElementById('navbarNav');

    navLinks.forEach(function(link) {
        if (window.innerWidth < 992 && !link.classList.contains('dropdown-toggle')) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                toggle: false
            });
            bsCollapse.hide();
        }
    });
    });
</script>

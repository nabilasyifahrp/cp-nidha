<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grootech</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('assets/images/about/grootech.png') }}" 
                 alt="Grootech Logo" 
                 width="60" height="60" 
                 style="margin-right: 8px; border-radius: 50%;">
            <span class="font-weight-bold text-primary" style="font-size: 1.5rem;">
                Groo<span class="text-dark">Tech</span>.
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('grootech.about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('grootech.contacts') }}">Contacts</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('grootech.careers') }}">Careers</a></li>
        <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('grootech.buy') }}">Buy Now</a>
        </li>
    </ul>
</div>

    </div>
</nav>

    <div class="container">
        <h1>Welcome to Grootech</h1>
        <p>This is the main page for Grootech project.</p>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

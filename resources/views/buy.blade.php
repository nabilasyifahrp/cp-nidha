<!-- resources/views/buy.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now - Grootech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Gaya untuk terminal */
        .terminal {
            background-color: #2e2e2e;
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', Courier, monospace;
            height: 300px;
            overflow-y: auto;
            margin-top: 20px;
        }
        .terminal-line {
            margin: 0;
            white-space: pre;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('grootech.contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('grootech.careers') }}">Careers</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('grootech.buy') }}">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Buy Our Products</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/01.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Tas ransel dengan desain modern dan kapasitas yang besar. Cocok untuk berbagai aktivitas.</p>
                        <p class="text-muted">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/02.jpg') }}" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Jam tangan dengan desain elegan dan fungsional. Ideal untuk penggunaan sehari-hari.</p>
                        <p class="text-muted">$29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/03.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Baju berkualitas tinggi dengan desain yang stylish. Tersedia dalam berbagai ukuran.</p>
                        <p class="text-muted">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4"> <!-- Memastikan produk 4, 5, dan 6 berada dalam baris baru -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/04.jpg') }}" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">Bangku etalase yang nyaman dan estetis. Cocok untuk keperluan rumah dan kantor.</p>
                        <p class="text-muted">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/05.jpg') }}" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">Tas ransel kecil yang praktis dan stylish. Ideal untuk anak-anak dan kegiatan ringan.</p>
                        <p class="text-muted">$49.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/product/06.jpg') }}" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">Kamera berkualitas tinggi dengan fitur canggih. Cocok untuk pemotretan profesional. </p>
                        <p class="text-muted">$59.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="terminal">
            <p class="terminal-line">Welcome to Grootech Terminal!</p>
            <p class="terminal-line">> Listing available products...</p>
            <p class="terminal-line">1. Product 1 - $19.99</p>
            <p class="terminal-line">2. Product 2 - $29.99</p>
            <p class="terminal-line">3. Product 3 - $39.99</p>
            <p class="terminal-line">> Use the buttons above to purchase your desired items.</p>
            <p class="terminal-line">> Thank you for choosing Grootech!</p>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 Grootech. All Rights Reserved | Developed by ThemeHt</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

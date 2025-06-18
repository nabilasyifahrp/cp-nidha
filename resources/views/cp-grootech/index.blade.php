@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row align-items-center"> <!-- Menggunakan align-items-center untuk vertikal alignment -->
        <div class="col-lg-8 text-center d-flex flex-column justify-content-center"> <!-- Menggunakan flex untuk center alignment -->
            <h1 style="color: #003366;">Selamat Datang di Grootech</h1> <!-- Warna biru -->
            <p class="lead" style="color: black;">Ini adalah halaman utama untuk proyek Grootech, solusi terbaik untuk kebutuhan teknologi Anda.</p> <!-- Warna hitam -->
            <p style="color: black;">Jelajahi layanan kami dan ketahui lebih banyak tentang kami.</p> <!-- Warna hitam -->
            <div class="mt-3"> <!-- Menambahkan margin-top untuk pemisah -->
                <a href="{{ route('grootech.about') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <!-- Memastikan gambar di-load dengan benar -->
            <img src="{{ asset('assets/images/hero/06.png') }}" alt="Selamat Datang" class="img-fluid rounded">
        </div>
    </div>
</div>

        
        <hr class="my-4">

       <!-- Bagian Layanan Kami -->
<h2>Layanan Kami</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 h-100">
            <img src="{{ asset('assets/images/about/06.png') }}" class="card-img-top" alt="Layanan 1">
            <div class="card-body">
                <h5 class="card-title">Pengembangan Perangkat Lunak Kustom</h5>
                <p class="card-text">Grootech menyediakan layanan pengembangan perangkat lunak kustom yang dirancang untuk memenuhi kebutuhan spesifik bisnis Anda.</p>
                <a href="https://grootech.id" class="btn btn-secondary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 h-100">
            <img src="{{ asset('assets/images/about/04.png') }}" class="card-img-top" alt="Layanan 2">
            <div class="card-body">
                <h5 class="card-title">Konsultasi IT dan Transformasi Digital</h5>
                <p class="card-text">Tim ahli kami menawarkan konsultasi IT untuk membantu perusahaan dalam perjalanan transformasi digital.</p>
                <a href="https://grootech.id" class="btn btn-secondary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 h-100">
            <img src="{{ asset('assets/images/about/03.png') }}" class="card-img-top" alt="Layanan 3">
            <div class="card-body">
                <h5 class="card-title">Pengembangan Aplikasi Mobile</h5>
                <p class="card-text">Kami menciptakan aplikasi yang menarik secara visual dan berfungsi dengan baik di berbagai platform.</p>
                <a href="https://grootech.id" class="btn btn-secondary">Detail</a>
            </div>
        </div>
    </div>
</div>


        <hr class="my-4">

        <!-- Bagian Testimonial -->
        <h2>Apa Kata Klien Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">"Grootech membantu kami mencapai tujuan kami dengan layanan dan dukungan yang luar biasa!"</p>
                        <footer class="blockquote-footer">John Doe, CEO ExampleCorp</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">"Tim yang luar biasa dan pendekatan yang sangat profesional. Sangat merekomendasikan Grootech!"</p>
                        <footer class="blockquote-footer">Jane Smith, CTO TechSolutions</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">"Layanan yang luar biasa dan perhatian terhadap detail. Grootech adalah mitra tepercaya kami."</p>
                        <footer class="blockquote-footer">Tom Brown, Product Manager InnovateX</footer>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!-- Bagian Tim Kami -->
        <h2>Kenali Tim Kami</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/01.png') }}" class="img-fluid rounded-circle mb-3" alt="Anggota Tim 1">
                <h5>Michael Lee</h5>
                <p class="text-muted">CEO & Pendiri</p>
                <a href="https://facebook.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/facebook.png') }}" alt="Facebook" width="32" height="32">
             </a>
                <a href="https://dribbble.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/dribbble.png') }}" alt="Dribbble" width="32" height="32">
             </a>
                <a href="https://instagram.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/instagram.png') }}" alt="Instagram" width="32" height="32">
            </a>
                <a href="https://twitter.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/twitter.png') }}" alt="Twitter" width="32" height="32">
            </a>
                <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/linkedln.png') }}" alt="LinkedIn" width="32" height="32">
            </a>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/02.png') }}" class="img-fluid rounded-circle mb-3" alt="Anggota Tim 2">
                <h5>Susan Kim</h5>
                <p class="text-muted">Chief Technology Officer</p>
                <a href="https://facebook.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/facebook.png') }}" alt="Facebook" width="32" height="32">
             </a>
                <a href="https://dribbble.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/dribbble.png') }}" alt="Dribbble" width="32" height="32">
             </a>
                <a href="https://instagram.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/instagram.png') }}" alt="Instagram" width="32" height="32">
            </a>
                <a href="https://twitter.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/twitter.png') }}" alt="Twitter" width="32" height="32">
            </a>
                <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/linkedln.png') }}" alt="LinkedIn" width="32" height="32">
            </a>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/04.png') }}" class="img-fluid rounded-circle mb-3" alt="Anggota Tim 3">
                <h5>Emily Tran</h5>
                <p class="text-muted">Kepala Pemasaran</p>
                <a href="https://facebook.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/facebook.png') }}" alt="Facebook" width="32" height="32">
             </a>
                <a href="https://dribbble.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/dribbble.png') }}" alt="Dribbble" width="32" height="32">
             </a>
                <a href="https://instagram.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/instagram.png') }}" alt="Instagram" width="32" height="32">
            </a>
                <a href="https://twitter.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/twitter.png') }}" alt="Twitter" width="32" height="32">
            </a>
                <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/linkedln.png') }}" alt="LinkedIn" width="32" height="32">
            </a>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/03.png') }}" class="img-fluid rounded-circle mb-3" alt="Anggota Tim 4">
                <h5>David Wong</h5>
                <p class="text-muted">Pengembang Utama</p>
                <a href="https://facebook.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/facebook.png') }}" alt="Facebook" width="32" height="32">
             </a>
                <a href="https://dribbble.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/dribbble.png') }}" alt="Dribbble" width="32" height="32">
             </a>
                <a href="https://instagram.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/instagram.png') }}" alt="Instagram" width="32" height="32">
            </a>
                <a href="https://twitter.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/twitter.png') }}" alt="Twitter" width="32" height="32">
            </a>
                <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
                <img src="{{ asset('assets/images/about/linkedln.png') }}" alt="LinkedIn" width="32" height="32">
            </a>
            </div>
        </div>

        <hr class="my-4">

        <!-- Bagian Berita Terbaru -->
<h2>Berita Terbaru</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card h-100">
            <img src="{{ asset('assets/images/services/02.png') }}" class="card-img-top" alt="Blog 1">
            <div class="card-body">
                <h5 class="card-title">Bagaimana AI Mengubah Industri Teknologi</h5>
                <p class="card-text">Temukan tren terbaru dalam AI dan bagaimana itu mengubah lanskap teknologi.</p>
                <a href="https://lp2m.uma.ac.id/2023/03/19/bagaimana-kecerdasan-buatan-ai-mengubah-sektor-industri/" target="_blank" class="btn btn-secondary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <img src="{{ asset('assets/images/services/01.png') }}" class="card-img-top" alt="Blog 2">
            <div class="card-body">
                <h5 class="card-title">5 Tips Keamanan Siber Terbaik untuk Bisnis</h5>
                <p class="card-text">Lindungi bisnis Anda dengan praktik keamanan siber yang penting ini.</p>
                <a href="https://www.coxblue.com/5-expert-cyber-security-tips-for-your-small-to-medium-size-business-smb/" target="_blank" class="btn btn-secondary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <img src="{{ asset('assets/images/services/03.png') }}" class="card-img-top" alt="Blog 3">
            <div class="card-body">
                <h5 class="card-title">Mengapa Transformasi Digital Penting</h5>
                <p class="card-text">Pelajari tentang pentingnya transformasi digital di dunia saat ini.</p>
                <a href="https://aws.amazon.com/id/what-is/digital-transformation/" target="_blank" class="btn btn-secondary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

        <hr class="my-4">

        <!-- Bagian FAQ -->
        <h2>Pertanyaan yang Sering Diajukan</h2>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu Grootech?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Grootech adalah penyedia solusi teknologi yang fokus pada penyediaan layanan berkualitas untuk kebutuhan bisnis Anda.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara saya memulai dengan Grootech?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Anda bisa memulai dengan menghubungi kami melalui halaman Kontak kami atau dengan menjelajahi bagian Layanan kami.
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

       <!-- Bagian Ajakan untuk Bertindak -->
<div class="text-center py-5 bg-primary text-white" style="margin: 0;"> <!-- Menghapus margin -->
    <h2>Siap Mengangkat Bisnis Anda ke Level Selanjutnya?</h2>
    <p>Hubungi kami hari ini dan dapatkan solusi terbaik untuk kebutuhan teknologi Anda!</p>
    <a href="{{ route('grootech.contact') }}" class="btn btn-light">Kontak Kami</a>
</div>

<!-- Garis Pemisah -->
<hr class="my-0" style="border: 1px solid rgba(255, 255, 255, 0.5);"> <!-- Mempertahankan garis pemisah tanpa margin -->

<!-- Footer Section -->
<footer class="bg-primary text-white py-5" style="margin: 0;"> <!-- Menghapus margin -->
    <div class="container-fluid p-0"> <!-- Menghapus padding dan margin -->
        <div class="row m-0"> <!-- Menghapus margin -->
            <!-- Newsletter Section -->
            <div class="col-lg-4 mb-0" style="max-width: 400px; margin: auto;">
                <div class="p-4" style="background: rgba(255, 255, 255, 0.2); color: #333; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3); padding: 20px;">
                    <h5 class="text-uppercase fw-bold" style="color: #333; text-align: center;">Newsletter</h5>
                    <p class="mb-3" style="color: #333; text-align: center;">Subscribe Our Newsletter</p>
                    <form action="#" method="POST">
                        <div class="form-group mb-3">
                            <input type="email" class="form-control border-0 rounded" placeholder="Email Address" required style="padding: 12px; font-size: 1rem; background-color: rgba(255, 255, 255, 0.8); color: #333;">
                        </div>
                        <button type="submit" class="btn w-100 fw-bold" style="padding: 12px; font-size: 1rem; background-color: rgba(255, 255, 255, 0.6); border: 1px solid rgba(255, 255, 255, 0.5); color: #333;">Subscribe</button>
                    </form>
                    <small class="d-block mt-3 text-center" style="color: rgba(51, 51, 51, 0.7);">Get started for 1 Month free trial. No Purchase required.</small>
                </div>
            </div>

            <div class="col-lg-2 mb-0 text-center">
    <h5 class="text-uppercase mb-3" style="color: white;">Pages</h5>
    <ul class="list-unstyled" style="margin-left: 10px; text-align: left;">
        <li><a href="#" class="text-white" style="text-decoration: none; line-height: 2;">About</a></li>
        <li><a href="#" class="text-white" style="text-decoration: none; line-height: 2;">Shop</a></li>
        <li><a href="#" class="text-white" style="text-decoration: none; line-height: 2;">FAQ</a></li>
        <li><a href="#" class="text-white" style="text-decoration: none; line-height: 2;">Blogs</a></li>
        <li><a href="#" class="text-white" style="text-decoration: none; line-height: 2;">Contact Us</a></li>
    </ul>

    <h5 class="text-uppercase mt-4" style="color: white;">Grootech</h5>
    <div class="d-flex justify-content-start">
        <a href="https://facebook.com" class="text-white mx-2" target="_blank">
            <img src="{{ asset('assets/images/about/facebook.png') }}" alt="Facebook" width="32" height="32">
        </a>
        <a href="https://dribbble.com" class="text-white mx-2" target="_blank">
            <img src="{{ asset('assets/images/about/dribbble.png') }}" alt="Dribbble" width="32" height="32">
        </a>
        <a href="https://instagram.com" class="text-white mx-2" target="_blank">
            <img src="{{ asset('assets/images/about/instagram.png') }}" alt="Instagram" width="32" height="32">
        </a>
        <a href="https://twitter.com" class="text-white mx-2" target="_blank">
            <img src="{{ asset('assets/images/about/twitter.png') }}" alt="Twitter" width="32" height="32">
        </a>
        <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
            <img src="{{ asset('assets/images/about/linkedln.png') }}" alt="LinkedIn" width="32" height="32">
        </a>
    </div>
</div>

<div class="col-lg-2 mb-0">
    <h5 class="text-uppercase">Service</h5>
    <ul class="list-unstyled">
        <li><a href="#" class="text-white">Content Writing</a></li>
        <li><a href="#" class="text-white">Documentation</a></li>
        <li><a href="#" class="text-white">Account</a></li>
        <li><a href="#" class="text-white">Careers</a></li>
    </ul>
</div>

<div class="col-lg-2 mb-0">
    <h5 class="text-uppercase">Legal</h5>
    <ul class="list-unstyled">
        <li><a href="#" class="text-white">Terms of Service</a></li>
        <li><a href="#" class="text-white">Privacy Policy</a></li>
        <li><a href="#" class="text-white">Support</a></li>
    </ul>
</div>

<!-- Kolom tambahan untuk Testimonials dan Contact Info -->
<div class="col-lg-2 mb-0">
    <h5 class="text-uppercase">Testimonials</h5>
    <ul class="list-unstyled">
        <li class="d-flex align-items-start mb-3">
            <img src="{{ asset('assets/images/thumbnail/02.jpg') }}" alt="User A" class="rounded-circle" width="40" height="40" style="margin-right: 10px;">
            <div>
                <p class="text-white mb-1"><strong>User A</strong></p>
                <p class="text-white">"Great service!"</p>
            </div>
        </li>
        <li class="d-flex align-items-start mb-3">
            <img src="{{ asset('assets/images/thumbnail/01.jpg') }}" alt="User B" class="rounded-circle" width="40" height="40" style="margin-right: 10px;">
            <div>
                <p class="text-white mb-1"><strong>User B</strong></p>
                <p class="text-white">"I love this product!"</p>
            </div>
        </li>
        <li class="d-flex align-items-start mb-3">
            <img src="{{ asset('assets/images/thumbnail/03.jpg') }}" alt="User C" class="rounded-circle" width="40" height="40" style="margin-right: 10px;">
            <div>
                <p class="text-white mb-1"><strong>User C</strong></p>
                <p class="text-white">"Highly recommend!"</p>
            </div>
        </li>
    </ul>
</div>


            <div class="col-lg-2 mb-0 text-center">
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="row mt-4">
            <div class="col text-center">
                <p>&copy; 2024 Grootech. All Rights Reserved | Developed by <a href="https://themeht.com" class="text-white">ThemeHt</a></p>
            </div>
        </div>
    </div>
</footer>




@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="display-4 text-center">Bergabunglah dengan Tim Kami</h1>
        <p class="lead text-center">Kami sedang mencari individu berbakat untuk membantu kami berkembang.</p>

        <h2 class="mt-5">Posisi Terbuka</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="card-title">Software Engineer</h3>
                        <p class="card-text">Tanggung jawab mencakup pengembangan dan pemeliharaan aplikasi.</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="card-title">Product Manager</h3>
                        <p class="card-text">Memimpin pengembangan produk dan berkoordinasi dengan tim.</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="card-title">UI/UX Designer</h3>
                        <p class="card-text">Bertanggung jawab untuk merancang antarmuka pengguna yang menarik.</p>
                        <a href="#" class="btn btn-primary">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan posisi lainnya di sini -->
        </div>
        
        <h2 class="mt-5">Mengapa Bergabung dengan Kami?</h2>
        <p class="lead">Kami menawarkan lingkungan kerja yang kolaboratif dan mendukung dengan berbagai manfaat:</p>
        <ul>
            <li><i class="fas fa-check-circle"></i> Gaji yang kompetitif</li>
            <li><i class="fas fa-check-circle"></i> Kesempatan untuk pengembangan karir</li>
            <li><i class="fas fa-check-circle"></i> Lingkungan kerja yang inklusif</li>
            <li><i class="fas fa-check-circle"></i> Program kesejahteraan karyawan</li>
        </ul>
    </div>
@endsection

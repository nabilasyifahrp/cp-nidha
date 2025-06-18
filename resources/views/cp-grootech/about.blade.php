@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="display-4 text-center">Tentang Grootech</h1>
        <p class="lead text-center">Mitra terpercaya Anda dalam solusi teknologi.</p>

        <div class="row">
            <div class="col-lg-8">
                <h2>Misi Kami</h2>
                <p>
                    Di Grootech, kami berkomitmen untuk menyediakan solusi teknologi inovatif yang memberdayakan bisnis dan individu. 
                    Misi kami adalah untuk memberikan produk dan layanan berkualitas tinggi yang memenuhi kebutuhan pelanggan kami yang terus berkembang.
                </p>

                <h2>Tim Kami</h2>
                <p>
                    Tim kami terdiri dari profesional berpengalaman yang memiliki semangat terhadap teknologi. Kami bekerja sama untuk 
                    menciptakan solusi yang mendorong kesuksesan dan membuat perbedaan dalam kehidupan pelanggan kami.
                </p>

                <h2>Hubungi Kami</h2>
                <p>
                    Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk menghubungi kami 
                    melalui <a href="{{ route('grootech.contacts') }}">Halaman Kontak</a> kami.
                </p>
            </div>

            <div class="col-lg-4">
                <img src="{{ asset('assets/images/about/11.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow-sm">
            </div>
        </div>
        
        <hr class="my-4">

        <h2>Nilai-Nilai Kami</h2>
        <p>
            Di Grootech, kami percaya pada integritas, kolaborasi, dan perbaikan berkelanjutan. Kami berusaha untuk menciptakan budaya 
            inovasi di mana setiap orang merasa dihargai dan diberdayakan untuk memberikan yang terbaik.
        </p>

        <h2>Bergabunglah Bersama Kami</h2>
        <p>
            Tertarik untuk bergabung dengan tim kami? Lihat <a href="{{ route('grootech.careers') }}">halaman karir kami</a> untuk informasi lebih lanjut.
        </p>

        <div class="text-center mt-5">
            <h2>Ikuti Kami</h2>
            <p>Ikuti kami di saluran media sosial kami:</p>
            <a href="#" class="btn btn-outline-primary">
                <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="#" class="btn btn-outline-info">
                <i class="fab fa-twitter"></i> Twitter
            </a>
            <a href="#" class="btn btn-outline-danger">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        </div>
    </div>

    <!-- Menyertakan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

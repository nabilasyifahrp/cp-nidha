@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian kiri -->
            <div class="col-md-6">
                <h1 class="fw-bold">Informasi lebih lanjut</h1>
                <p>Silakan menghubungi kami di 0811-7336-665 atau klik link berikut:</p>
                <a href="https://wa.me/08117336665" class="btn btn-success mb-4">Chat Via WhatsApp</a>

                <div class="d-flex justify-content-start align-items-center mb-3">
                    <div class="me-4 text-center">
                        <img src="{{ asset('assets/images/sosial_media/zoom.png') }}" alt="Zoom" style="width: 80px;">
                        <p class="mt-2">Zoom</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('assets/images/sosial_media/gmeet.png') }}" alt="Google Meet" style="width: 80px;">
                        <p class="mt-2">Google Meet</p>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan -->
            <div class="col-md-6">
                <h2 class="fw-bold">Buat Janji Temu</h2>
                <p class="text-muted">
                    Banyak fitur dan keunggulan layanan kami yang belum dapat kami sampaikan via website ini.
                    Silakan isi jadwal berikut untuk dapat kami presentasikan secara lebih detail.
                </p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('grootech.appointment.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama (wajib)</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (wajib)</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon (wajib)</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Perusahaan</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Presentasi</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Jam</label>
                        <select class="form-select" id="time" name="time">
                            <option>09.00 WIB</option>
                            <option>10.00 WIB</option>
                            <option>11.00 WIB</option>
                            <option>12.00 WIB</option>
                            <option>13.00 WIB</option>
                            <option>14.00 WIB</option>
                            <option>15.00 WIB</option>
                            <option>16.00 WIB</option>
                            <!-- Tambahkan opsi lainnya jika perlu -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection

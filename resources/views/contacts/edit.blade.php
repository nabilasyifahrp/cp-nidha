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
                <h2 class="fw-bold">Edit Janji Temu</h2>
                <p class="text-muted">
                    Silakan edit informasi janji temu berikut.
                </p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('grootech.appointment.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama (wajib)</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $appointment->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (wajib)</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $appointment->email) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon (wajib)</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $appointment->phone) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Perusahaan</label>
                        <input type="text" class="form-control" id="company" name="company" value="{{ old('company', $appointment->company) }}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Presentasi</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $appointment->date) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Jam</label>
                        <select class="form-select" id="time" name="time">
                            <option {{ $appointment->time === '09.00 WIB' ? 'selected' : '' }}>09.00 WIB</option>
                            <option {{ $appointment->time === '10.00 WIB' ? 'selected' : '' }}>10.00 WIB</option>
                            <option {{ $appointment->time === '11.00 WIB' ? 'selected' : '' }}>11.00 WIB</option>
                            <option {{ $appointment->time === '12.00 WIB' ? 'selected' : '' }}>12.00 WIB</option>
                            <option {{ $appointment->time === '13.00 WIB' ? 'selected' : '' }}>13.00 WIB</option>
                            <option {{ $appointment->time === '14.00 WIB' ? 'selected' : '' }}>14.00 WIB</option>
                            <option {{ $appointment->time === '15.00 WIB' ? 'selected' : '' }}>15.00 WIB</option>
                            <option {{ $appointment->time === '16.00 WIB' ? 'selected' : '' }}>16.00 WIB</option>
                            <!-- Tambahkan opsi lainnya jika perlu -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message', $appointment->message) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

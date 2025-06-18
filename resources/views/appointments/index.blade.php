<!-- resources/views/appointments/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Contact US</h1>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Buat Appointment Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Perusahaan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pesan</th> <!-- Tambahkan kolom Pesan -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $index => $appointment)
                    <tr>
                        <td>{{ $appointment['name'] }}</td>
                        <td>{{ $appointment['email'] }}</td>
                        <td>{{ $appointment['phone'] }}</td>
                        <td>{{ $appointment['company'] ?? '-' }}</td>
                        <td>{{ $appointment['date'] }}</td>
                        <td>{{ $appointment['time'] }}</td>
                        <td>{{ $appointment['message'] }}</td> <!-- Menampilkan pesan -->
                        <td>
                            <a href="{{ route('appointments.edit', $index) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('appointments.destroy', $index) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

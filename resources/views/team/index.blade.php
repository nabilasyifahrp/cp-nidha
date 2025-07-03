{{-- resources/views/team/index.blade.php --}}
@extends('layouts.app') {{-- pastikan kamu punya layouts.app ya --}}

@section('content')
<div class="container">
    <h2>Daftar Team</h2>
    <a href="{{ route('team.create') }}" class="btn btn-primary mb-3">+ Tambah Team</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->position }}</td>
                <td><img src="{{ asset('storage/' . $team->image) }}" alt="" width="100"></td>
                <td>
                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('team.destroy', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

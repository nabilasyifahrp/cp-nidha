{{-- resources/views/team/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Team</h2>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required placeholder="Contoh: Ratna">
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="position" class="form-control" required placeholder="Contoh: UI Designer">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

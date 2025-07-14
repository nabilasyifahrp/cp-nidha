@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4>Edit Anggota Tim</h4>
    <form action="{{ route('team.update', $team->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <textarea name="expertise" class="form-control" required>{{ $team->expertise }}</textarea>
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection

{{-- resources/views/team/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Team</h2>
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
        </div>
        <div class="mb-3">
            <label>Foto (Kosongkan jika tidak diganti)</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $team->image) }}" width="120" class="mt-2">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Partner</h2>
    <form action="{{ route('partners.update', $partner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $partner->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            @if($partner->logo)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$partner->logo) }}" alt="Logo" style="height: 80px">
                </div>
            @endif
            <input type="file" name="logo" id="logo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $partner->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

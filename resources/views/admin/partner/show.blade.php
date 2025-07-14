@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-danger">Partner Details</h2>
    </div>

    <div class="card shadow rounded mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <div class="mb-4 text-center">
                @if ($partner->logo)
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="Partner Logo" class="img-fluid rounded" style="max-height: 150px;">
                @else
                    <p class="text-muted">No logo</p>
                @endif
            </div>

            <h5 class="fw-bold">Name</h5>
            <p>{{ $partner->name }}</p>

            <h5 class="fw-bold">Description</h5>
            <p>{{ $partner->description ?? '-' }}</p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('partners.index') }}" class="btn btn-secondary rounded-pill px-4">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection

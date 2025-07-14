@extends('layouts.app') atau layouts.admin sesuai template kamu

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Man Power Supply</h2>
        <p class="text-muted">Below are the advantages we offer in our manpower supply services.</p>
    </div>

    <div class="row justify-content-center">
        @forelse($advantages as $adv)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        @if($adv->icon)
                            <div class="mb-3">
                                <i class="{{ $adv->icon }} fs-2 text-primary"></i>
                            </div>
                        @endif
                        <h5 class="card-title">{{ $adv->title }}</h5>
                        <p class="card-text">{{ $adv->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                No data available.
            </div>
        @endforelse
    </div>
</div>
@endsection

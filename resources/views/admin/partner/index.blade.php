@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-danger">Manage Partners</h2>
    </div>

    {{-- Add Partner Button --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('partners.create') }}" class="btn btn-danger btn-lg shadow rounded-pill px-4">
            <i class="bi bi-person-plus-fill me-2"></i> Add Partner
        </a>
    </div>

    {{-- Success Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Table --}}
    <div class="table-responsive shadow rounded">
        <table class="table table-bordered align-middle text-center table-hover">
            <thead class="table-danger text-dark">
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($partners as $partner)
                <tr>
                    <td>
                        @if($partner->logo)
                            <img src="{{ asset('storage/'.$partner->logo) }}" alt="Logo" class="img-thumbnail" style="height: 60px;">
                        @else
                            <span class="text-muted">No logo</span>
                        @endif
                    </td>
                    <td class="fw-semibold">{{ $partner->name }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center flex-wrap">
                            <a href="{{ route('partners.read', $partner->id) }}" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-info-circle"></i> Detail
                            </a>
                            <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            {{-- ✅ Fix di sini: gunakan $partner langsung, jangan $partner->id --}}
                            <form action="{{ route('partners.destroy', $partner) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this partner?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash3"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-muted">No partners have been added yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Manage Teams</h2>
    </div>

    {{-- Add Team Button --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('team.create') }}" class="btn btn-primary btn-lg shadow rounded-pill px-4">
            <i class="bi bi-person-plus-fill me-2"></i> Add Team Member
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
            <thead class="table-primary text-dark">
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Expertise</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teams as $team)
                <tr>
                    <td class="fw-semibold">{{ $team->name }}</td>
                    <td>{{ $team->position }}</td>
                    <td class="text-start" style="max-width: 300px;">
                        {{ \Illuminate\Support\Str::limit($team->expertise, 150) }}
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="{{ route('team.edit', $team->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('team.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this team member?')">
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
                    <td colspan="4" class="text-muted">No team members have been added yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

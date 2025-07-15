@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4>Add Team Members</h4>
    <form action="{{ route('team.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Expertise</label>
            <textarea name="expertise" class="form-control" required></textarea>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection

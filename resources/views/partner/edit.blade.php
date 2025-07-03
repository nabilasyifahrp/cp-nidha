@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Partner</h2>
    <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $partner->name }}">
        </div>
        <div class="mb-3">
            <label>Logo</label><br>
            @if($partner->logo)
                <img src="{{ asset('storage/'.$partner->logo) }}" width="100"><br>
            @endif
            <input type="file" name="logo" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

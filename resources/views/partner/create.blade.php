@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Partner</h2>
    <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Contoh: PT. ABC">
        </div>
        <div class="mb-3">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('partners.create') }}" class="btn btn-primary mb-3">Tambah Partner</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Logo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
                <tr>
                    <td>{{ $partner->name }}</td>
                    <td>
                        @if($partner->logo)
                            <img src="{{ asset('storage/'.$partner->logo) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus partner?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

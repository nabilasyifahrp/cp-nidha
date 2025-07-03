{{-- resources/views/partner/show.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-4">Detail Partner</h1>

        <div class="mb-4">
            <strong>Nama:</strong> {{ $partner->name }}
        </div>

        <div class="mb-4">
            <strong>Logo:</strong><br>
            @if($partner->logo)
                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="w-32 h-32 object-contain border">
            @else
                <p class="text-gray-500">Tidak ada logo</p>
            @endif
        </div>

        <a href="{{ route('partners.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kembali</a>
    </div>
</div>
@endsection

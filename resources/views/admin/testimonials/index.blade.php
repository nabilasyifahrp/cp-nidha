<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-white via-sky-50 to-emerald-100 text-gray-800 min-h-screen">

    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex flex-wrap sm:flex-nowrap justify-between items-center">
            <h1 class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Testimonials</h1>
            <a href="{{ route('admin.panel') }}" 
               class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i>Back
            </a>
        </nav>
    </header>

    <main class="container max-w-screen-lg mx-auto px-4 py-8">
    <h1 class="mb-6 text-3xl font-semibold text-emerald-700 text-center">Testimonials</h1>

    <a href="{{ route('testimonials.create') }}" 
       class="inline-block mb-6 px-6 py-3 bg-emerald-600 text-white font-semibold rounded-lg shadow hover:bg-emerald-700 transition">
        + Add Testimonials
    </a>

    @if(session('success'))
        <div class="mb-6 px-4 py-3 bg-green-100 text-green-800 rounded-lg border border-green-300 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-10 w-full px-4 md:px-8 items-stretch">

        @foreach($testimonials as $testimonial)
        <div class="relative rounded overflow-hidden shadow-md bg-white">

            <!-- Tambahan icon edit dan hapus kecil di pojok kanan bawah -->
            <div class="absolute bottom-2 right-2 flex flex-col space-y-1 z-10">
                <a href="{{ route('testimonials.edit', $testimonial->id) }}" title="Edit"
                   class="p-1 rounded bg-emerald-600 text-white hover:bg-emerald-700 transition">
                    <i class="ph ph-pencil-simple text-xs"></i>
                </a>
                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus testimonial ini?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Hapus"
                        class="p-1 rounded bg-red-600 text-white hover:bg-red-700 transition mt-1">
                        <i class="ph ph-trash text-xs"></i>
                    </button>
                </form>
            </div>
            <!-- End tambahan -->

            @if($testimonial->image)
            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-full h-96 object-cover">

            @else
                <div class="w-full h-72 flex items-center justify-center bg-gray-200 text-gray-500 italic">Tidak ada gambar</div>
            @endif
            <div class="absolute bottom-0 bg-emerald-800 bg-opacity-80 text-white p-4 w-full">
                <p class="text-xs uppercase tracking-wide">Testimonial</p>
                <p class="text-lg font-semibold break-words">{{ $testimonial->testi }}</p>
                <p class="text-sm mt-1">- {{ $testimonial->name }}</p>
            </div>
        </div>
        @endforeach
    </div>
</main>

</body>
</html>

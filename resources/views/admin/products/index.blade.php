<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Service/Products</title>
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
            <a href="{{ route('admin.panel') }}"  class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Service/Products</a>
            <a href="{{ route('admin.panel') }}" 
               class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i>Back
            </a>
        </nav>
    </header>

    
    <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
        <div class="text-center mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-emerald-700">Manage Our Products</h2>
            <p class="text-gray-600 text-sm mt-1">Add, view, edit, or delete our service product data.</p>
        </div>        
    
        <div class="text-right mb-6">
            <a href="{{ route('product.create') }}" class="bg-emerald-600 text-white px-4 py-2 sm:px-5 sm:py-3 rounded-lg shadow hover:bg-emerald-700 transition text-sm sm:text-base">+ Add Products</a>
        </div>
        
        <div class="space-y-1">
        @foreach ($products as $product)
        <div class="bg-white px-6 py-4 hover:bg-green-50 transition shadow-md hover:shadow-lg rounded-lg cursor-pointer" onclick= "window.location='{{ route('product.read', $product->id) }}'">
            <div class="flex space-x-8">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-20 h-20 rounded object-cover">
                <div class="flex justify-between flex-1 mt-2">
                    <div class="mt-1">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $product->title }}</h3>
                        <p class="text-sm text-green-600">{{ $product->status == 1 ? 'Enable' : 'Disable' }}</p>
                    </div>

                    <div class="flex flex-col space-y-2 text-lg pl-4">
                        <a href="{{ route('product.edit', $product->id) }}" title="Edit"class="text-yellow-600 hover:text-yellow-700 transition-transform duration-200 hover:scale-110 active:scale-90">
                            <i class="ph ph-pencil-simple"></i>
                        </a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete" class="text-red-600 hover:text-red-700 transition-transform duration-200 hover:scale-110 active:scale-90">
                                <i class="ph ph-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </main>  
    
    @if(session('success'))
        <div id="notif" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-600 bg-opacity-50 text-white px-6 py-3 rounded-xl shadow-lg z-50">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                const notif = document.getElementById('notif');
                if (notif) notif.style.display = 'none';
            }, 2000); 
        </script>
    @endif
</body>
</html>

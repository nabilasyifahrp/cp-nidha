<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-white via-sky-50 to-green-100 text-gray-800 min-h-screen">
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex flex-wrap sm:flex-nowrap justify-between items-center">
            <a href="{{ route('product.index') }}" class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Product Details</a>
            <a href="{{ route('product.index') }}" class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back
            </a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="w-full flex justify-center bg-gray-50">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="max-h-[400px] object-contain">
            </div>
            <div class="p-6 space-y-2">
                <div class="flex justify-between items-center flex-wrap gap-2">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">{{ $product->title }}</h2>
                    <p class="px-3 py-1 text-sm font-medium rounded-full {{ $product->status ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600' }}">{{ $product->status ? 'Enable' : 'Disable' }}</p>
                </div>
                <p class="text-sm text-gray-400 font-medium">{{ $product->category->category ?? '-' }}</p>

                @php
                $cleanedDescription = strip_tags($product->description);
                $lines = preg_split('/\.\s*/', $cleanedDescription, -1, PREG_SPLIT_NO_EMPTY);
                @endphp
                <ul class="space-y-2 mt-4">
                    @foreach($lines as $desc)
                        @php $desc = trim($desc); @endphp
                        @if($desc !== '')
                            <li class="flex items-start gap-2">
                                <i class="ph ph-check text-green-500 mt-1"></i>
                                <span class="text-gray-700">{{ $desc }}.</span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
</body>

</html>
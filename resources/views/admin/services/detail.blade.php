<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#EEF2FF] text-[#111827] min-h-screen">
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('service.index') }}" class="flex items-center gap-2 px-5 py-2 border border-[#581c87] text-[#581c87] rounded-xl font-semibold hover:bg-[#6366F1] hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back to List
            </a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-[#581c87]">
            @if($service->image)
            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-64 object-cover">
            @endif
            <div class="p-6 space-y-4">
                <h2 class="text-2xl font-bold text-[#581c87]">{{ $service->title }}</h2>
                <p class="text-[#4B5563] text-base leading-relaxed whitespace-pre-line">
                    {{ $service->description }}
                </p>
            </div>
        </div>
    </main>
</body>

</html>
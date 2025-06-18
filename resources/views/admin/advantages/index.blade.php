<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advantages Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-[#EEF2FF] text-[#1E3A8A] min-h-screen">
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex flex-wrap sm:flex-nowrap justify-between items-center">
            <a href="{{ route('admin.panel') }}" class="text-xl sm:text-2xl font-bold text-[#6366F1] mb-2 sm:mb-0">Advantages</a>
            <a href="{{ route('admin.panel') }}" class="flex items-center gap-2 px-5 py-2 border border-[#6366F1] text-[#6366F1] rounded-xl font-semibold hover:bg-[#6366F1] hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
        <div class="text-center mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-[#6366F1]">Manage Our Advantages!</h2>
            <p class="text-[#4B5563] text-sm mt-1">Add, view, edit, or delete advantages content.</p>
        </div>

        <div class="text-right">
            <a href="{{ route('advantages.create') }}" class="bg-[#6366F1] text-white font-semibold px-4 py-2 sm:px-5 sm:py-3 rounded-lg shadow hover:brightness-110 transition text-sm sm:text-base">
                + Add Advantage
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($advantages as $advantage)
            <div class="bg-white border border-[#6366F1] rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col cursor-pointer transition-transform duration-200 hover:scale-105"
                onclick="window.location='{{ route('advantages.read', $advantage->id) }}'">
                <img src="{{ asset('storage/' . $advantage->image) }}" alt="{{ $advantage->title }}" class="w-full h-48 object-cover p-3">
                <div class="p-4 flex flex-col justify-between h-full">
                    <h3 class="text-lg font-semibold text-[#1E3A8A]">{{ $advantage->title }}</h3>
                    <p class="text-sm mt-1 text-[#4B5563] line-clamp-2">{{ $advantage->description }}</p>
                    <div class="flex justify-between items-center mt-4 text-sm">
                        <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3 text-lg">
                            <a href="{{ route('advantages.edit', $advantage->id) }}" class="text-[#6366F1] hover:text-indigo-800 text-lg sm:text-xl" title="Edit">
                                <i class="ph ph-pencil-simple"></i>
                            </a>
                            <form action="{{ route('advantages.destroy', $advantage->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-lg sm:text-xl" title="Delete" onclick="return confirm('Are you sure want to delete this item?')">
                                    <i class="ph ph-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(session('success'))
        <div id="notif" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-indigo-500 text-white px-6 py-3 rounded-xl shadow-lg z-50">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                const notif = document.getElementById('notif');
                if (notif) notif.style.display = 'none';
            }, 2000);
        </script>
        @endif
    </main>
</body>

</html>
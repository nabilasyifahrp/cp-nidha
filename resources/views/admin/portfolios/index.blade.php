<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Data Portfolios</title>
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
            <a href="{{ route('admin.panel') }}"  class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Portfolios</a>
            <a href="{{ route('admin.panel') }}" class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
        <div class="text-center mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-emerald-700">Manage Our Projects!</h2>
            <p class="text-gray-600 text-sm mt-1">Add, view, edit, or delete our projects.</p>
        </div>
        <div class="text-right">
            <a href="{{ route('portfolio.create') }}" class="bg-emerald-600 text-white px-4 py-2 sm:px-5 sm:py-3 rounded-lg shadow hover:bg-emerald-800 transition text-sm sm:text-base">+ Add Projects</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col cursor-pointer transition-transform duration-200 hover:scale-105"
            onclick= "window.location='{{ route('portfolio.read', $project->id) }}'">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover p-3">
                <div class="p-4 flex flex-col justify-between h-full">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $project->title }}</h3>
                    <p class="text-sm text-gray-500 mt-1 overflow-hidden">{{ $project->description }}</p>
                    <div class="flex justify-between items-center mt-4 text-sm">
                        <p class="text-emerald-600 font-medium">{{ $project->status == 1 ? 'Enable' : 'Disable' }}</p>
                        <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3 text-lg">
                            <a href="{{ route('portfolio.edit', $project->id) }}" class="text-yellow-500 hover:text-yellow-800 text-lg sm:text-xl" title="Edit">
                                <i class="ph ph-pencil-simple"></i>
                            </a>
                            <form action="{{ route('portfolio.destroy', $project->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-800 text-lg sm:text-xl" title="Delete" onclick="return confirm('Want to delete?')">
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
    </main>
</body>
</html>
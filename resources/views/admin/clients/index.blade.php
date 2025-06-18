<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Clients</title>
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
            <h1 class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Clients</h1>
            <a href="{{ route('admin.panel') }}" 
               class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i>Back
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
        <div class="text-center mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-emerald-700">Manage Our Clients!</h2>
        </div>

        <div class="text-right mb-6">
            <a href="{{ route('client.create') }}" class="bg-emerald-600 text-white px-4 py-2 sm:px-5 sm:py-3 rounded-lg shadow hover:bg-emerald-700 transition text-sm sm:text-base">+ Add Clients</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($clients as $client)
        <div 
        class="bg-white p-6 rounded-lg shadow hover:shadow-lg hover:bg-green-50 transition cursor-pointer"
        onclick="window.location='{{ route('client.read', $client->id) }}'"
    >
        @if ($client->image)
        <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" class="w-full h-40 object-cover rounded-md mb-4" />

        @else
            <div class="w-full h-40 bg-gray-200 rounded-md mb-4 flex items-center justify-center text-gray-400 text-sm">
                No Image
            </div>
        @endif

        <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $client->name }}</h2>
        <p class="text-gray-600 text-sm truncate">{{ strip_tags($client->description) }}</p>

        <div class="flex justify-end space-x-3 mt-4 text-lg">
        <a href="{{ route('client.edit', $client->id) }}" 
   title="Edit" 
   onclick="event.stopPropagation()" 
   class="text-yellow-600 hover:text-yellow-700 transition-transform hover:scale-110">
    <i class="ph ph-pencil-simple"></i>
</a>

<form action="{{ route('client.destroy', $client->id) }}" 
      method="POST" 
      onsubmit="event.stopPropagation(); return confirm('Hapus klien ini?')" 
      class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" 
            title="Delete" 
            onclick="event.stopPropagation()" 
            class="text-red-600 hover:text-red-700 transition-transform hover:scale-110">
        <i class="ph ph-trash"></i>
    </button>
</form>
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

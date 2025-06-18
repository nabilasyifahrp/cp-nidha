<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Management</title>
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

<body class="bg-[#FFFDE7] text-[#111827] min-h-screen">
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex flex-wrap sm:flex-nowrap justify-between items-center">
            <a href="{{ route('admin.panel') }}" class="text-xl sm:text-2xl font-bold text-[#FBC02D] mb-2 sm:mb-0">Trainings</a>
            <a href="{{ route('admin.panel') }}" class="flex items-center gap-2 px-5 py-2 border border-[#FBC02D] text-[#FBC02D] rounded-xl font-semibold hover:bg-[#FBC02D] hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
        <div class="text-center mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-[#FBC02D]">Manage Our Trainings!</h2>
            <p class="text-[#4B5563] text-sm mt-1">Add, view, edit, or delete training programs.</p>
        </div>

        <div class="text-right">
            <a href="{{ route('trainings.create') }}" class="bg-[#FBC02D] text-white font-semibold px-4 py-2 sm:px-5 sm:py-3 rounded-lg shadow hover:brightness-110 transition text-sm sm:text-base">
                + Add Training
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($trainings as $training)
            <div class="bg-[#FFF8E1] border border-[#FBC02D] rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col cursor-pointer transition-transform duration-200 hover:scale-105"
                onclick="window.location='{{ route('trainings.read', $training->id) }}'">
                <img src="{{ asset('storage/' . $training->image) }}" alt="{{ $training->title }}" class="w-full h-48 object-cover p-3">
                <div class="p-4 flex flex-col justify-between h-full">
                    <h3 class="text-lg font-semibold text-[#111827]">{{ $training->title }}</h3>
                    <p class="text-sm mt-1 text-[#4B5563] line-clamp-2">{{ $training->description }}</p>
                    <div class="flex justify-between items-center mt-4 text-sm">
                        <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3 text-lg">
                            <a href="{{ route('trainings.edit', $training->id) }}" class="text-[#FBC02D] hover:text-yellow-600 text-lg sm:text-xl" title="Edit">
                                <i class="ph ph-pencil-simple"></i>
                            </a>
                            <form action="{{ route('trainings.destroy', $training->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-lg sm:text-xl" title="Delete" onclick="return confirm('Are you sure want to delete this training?')">
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
        <div id="notif" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-yellow-400 text-white px-6 py-3 rounded-xl shadow-lg z-50">
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
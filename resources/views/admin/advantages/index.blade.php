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
        <div class="overflow-x-auto mt-6 flex justify-center">
            <table class="w-full max-w-4xl bg-white border border-[#6366F1] rounded-lg shadow-md overflow-hidden">
                <thead>
                    <tr style="background-color: #BDDDE4;" class="text-[#1E3A8A] font-semibold">
                        <th class="px-4 py-3 text-center text-sm font-semibold">No</th>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Title</th>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Description</th>
                        <th class="px-4 py-3 text-center text-sm font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="text-[#1E3A8A]">
                    @forelse($advantages as $index => $advantage)
                    <tr class="border-t hover:bg-indigo-50 transition">
                        <td class="px-4 py-4 text-center text-sm">{{ $index + 1 }}</td>
                        <td class="px-4 py-4 text-center text-sm font-semibold">{{ $advantage->title }}</td>
                        <td class="px-4 py-4 text-center text-sm text-gray-700">{{ $advantage->description }}</td>
                        <td class="px-4 py-4 text-center text-lg">
                            <div class="flex justify-center items-center space-x-3">
                                <a href="{{ route('advantages.edit', $advantage->id) }}" class="text-[#6366F1] hover:text-indigo-800" title="Edit">
                                    <i class="ph ph-pencil-simple"></i>
                                </a>
                                <form action="{{ route('advantages.destroy', $advantage->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" title="Delete">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-6 text-center text-[#6B7280] bg-[#F3F4F6] text-sm italic border border-black">
                            <div class="flex justify-center items-center space-x-2">
                                <i class="ph ph-info text-xl text-[#6366F1]"></i>
                                <span class="font-medium">No advantages found. Please add a new one.</span>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
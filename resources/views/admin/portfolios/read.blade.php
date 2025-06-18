<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex flex-wrap sm:flex-nowrap justify-between items-center">
            <a href="{{ route('portfolio.index') }}"  class="text-xl sm:text-2xl font-bold text-emerald-700 mb-2 sm:mb-0">Project Details</a>
            <a href="{{ route('portfolio.index') }}" class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm sm:text-base">
                <i class="ph ph-arrow-left text-lg"></i> Back
            </a>
        </nav>
</header>
<body class="bg-gradient-to-br from-white via-sky-50 to-emerald-100 text-gray-800 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 py-10">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-96 object-cover p-3">
            <div class="p-6 space-y-4">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">{{ $project->title }}</h2>
                    <p class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-green-100 text-green-800">{{ $project->status ? 'Enable' : 'Disable' }}</p>
                </div>
                <p class="text-gray-700 leading-relaxed text-justify break-words">{{ $project->description }}</p>
            </div>
        </div>
  </div>
</body>
</html>
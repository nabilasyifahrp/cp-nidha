<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-white via-green-50 to-green-100 text-gray-800 min-h-screen">

  <header class="bg-white sticky top-0 z-50 shadow-md">
    <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl sm:text-2xl font-bold text-emerald-700">Client Details</h1>
      <a href="{{ route('client.index') }}" class="flex items-center gap-2 px-5 py-2 border border-emerald-700 text-emerald-700 rounded-xl font-semibold hover:bg-emerald-600 hover:text-white transition text-sm">
        <i class="ph ph-arrow-left text-lg"></i> Back
      </a>
    </nav>
  </header>

  
  
  <main class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white rounded-lg shadow overflow-hidden border border-green-100">
      <div class="p-6 space-y-4">

        @if ($client->image)
          <div class="mb-6">
            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" class="w-full max-h-80 object-cover rounded-md" />
          </div>
        @endif

        <div class="mb-4">
          <h2 class="text-sm font-semibold text-primary mb-1">Name</h2>
          <p class="text-gray-800 bg-gray-50 px-4 py-2 rounded-md border border-green-200">{{ $client->name }}</p>
        </div>

        <div>
          <h2 class="text-sm font-semibold text-primary mb-1">Description</h2>
          <p class="text-gray-800 bg-gray-50 px-4 py-2 rounded-md border border-green-200 whitespace-pre-line">
            {{ $client->description }}
          </p>
        </div>

      </div>
    </div>
  </main>

</body>
</html>

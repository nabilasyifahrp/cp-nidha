<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Teams</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-white via-blue-50 to-green-50 min-h-screen text-gray-800 flex items-center justify-center">

    <div class="bg-white p-10 rounded-3xl shadow-2xl border border-gray-100 w-full max-w-xl">
        <h1 class="text-3xl font-bold mb-8 text-emerald-600 text-center">Add Teams</h1>
        <form class="space-y-6" action="{{ route('team.store') }}" method="POST">
            @csrf
            <div>
                <label class="block text-sm font-semibold mb-1">Name</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Position</label>
                <input type="text" name="position" class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <div class="flex justify-end gap-4 pt-4">
                <a href="{{ route('team.index') }}" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition">Back</a>
                <button type="submit" class="px-6 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md transition">Save</button>
            </div>
        </form>
    </div>

</body>

</html>

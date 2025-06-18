<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Teams</title>
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
        <h1 class="text-3xl font-bold mb-8 text-emerald-600 text-center">Edit Teams</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif
        <form class="space-y-6" action="{{ route('team.update', $team->id) }}" method="POST" id="editForm">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-1">Name</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" required  value="{{ old('name', $team->name) }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Position</label>
                <input type="text" name="position" class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" required  value="{{ old('position', $team->position) }}">
            </div>
            <div class="flex justify-end gap-4 pt-4">
                <a href="{{ route('team.index') }}" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition">Back</a>
                <button type="submit" id="saveButton" class="px-6 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md transition">Save Changes</button>
            </div>
        </form>
    </div>
</body>
</html>
<script>
    let form = document.getElementById('editForm');
    let saveButton = document.getElementById('saveButton');
    let initialData = new FormData(form);

    function checkChanges() {
        let formDataChanged = [...new FormData(form)].some(([key, value]) => {
            return value !== initialData.get(key);  
    });

        saveButton.disabled = !formDataChanged;
    }
    form.addEventListener('input', checkChanges);
    checkChanges();
</script>
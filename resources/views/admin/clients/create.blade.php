<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Client</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#059669', 
                    }
                }
            }
        }
    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }

    .custom-file-input::file-selector-button {
      background-color: #10b981; 
      color: white;
      padding: 0.2rem 0.5rem;
      border: none;
      border-radius: 0.5rem;
      font-size: 15px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .custom-file-input::file-selector-button:hover {
      background-color: #059669; 
    }
  </style>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg border border-green-100">
        <h1 class="text-2xl font-bold mb-6 text-primary text-center">Add Clients</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-primary mb-1">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter full name"
                    class="w-full px-4 py-2 border border-green-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                    required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-primary mb-1">Description</label>
                <textarea name="description" id="description" placeholder="Enter client description"
                    class="w-full px-4 py-2 border border-green-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                    required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-primary mb-1">Image</label>
                <input type="file" name="image" class="custom-file-input w-full text-gray-700 border border-gray-300 rounded-lg px-4 py-2 shadow-sm bg-white transition">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('client.index') }}"
                   class="text-sm text-primary hover:underline">
                   ← Back
                </a>

                <button type="submit"
                    class="bg-primary hover:bg-green-700 text-white px-6 py-2 rounded-md transition">
                    Save
                </button>
            </div>
        </form>
    </div>
</body>
</html>

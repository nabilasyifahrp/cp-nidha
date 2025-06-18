<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Training</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .custom-file-input::file-selector-button {
            background-color: #f59e0b;
            color: white;
            padding: 0.2rem 0.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-file-input::file-selector-button:hover {
            background-color: #d97706;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-white via-yellow-50 to-orange-50 min-h-screen text-gray-800">
    <div class="max-w-3xl mx-auto px-4 py-12">
        <div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100">
            <h1 class="text-3xl font-bold mb-8 text-[#FBC02D]">Add Training</h1>

            <form class="space-y-6" action="{{ route('trainings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label class="block text-sm font-semibold mb-1">Title</label>
                    <input type="text" name="title" class="w-full border border-gray-300 rounded-xl px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Image</label>
                    <input type="file" name="image" class="custom-file-input w-full text-gray-700 border border-gray-300 rounded-xl px-4 py-2 shadow-sm bg-white transition" required>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('trainings.index') }}" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition">
                        Back
                    </a>
                    <button type="submit" class="px-6 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white font-semibold shadow-md transition">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Testimonials</title>
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
            padding: 0.3rem 0.8rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .custom-file-input::file-selector-button:hover {
            background-color: #059669;
        }
    </style>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-lg bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-semibold text-emerald-700 mb-6 text-center">Add Testimonials</h2>
        
        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block mb-2 font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition" />
            </div>

            <div>
                <label for="testi" class="block mb-2 font-medium text-gray-700">Testimonial</label>
                <textarea name="testi" id="testi" required rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-md resize-y focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"></textarea>
            </div>

            <div>
                <label for="image" class="block mb-2 font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" class="custom-file-input w-full text-gray-600" />
            </div>

            <button type="submit"
                    class="w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg shadow-md transition">
                Save
            </button>
        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Projects</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gradient-to-br from-white via-blue-50 to-green-50 min-h-screen text-gray-800">
<div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-semibold mb-4">Edit Testimonials</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium mb-1">Name<span class="text-red-500">*</span></label>
            <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" required
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none p-2" />
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Testimonial<span class="text-red-500">*</span></label>
            <textarea name="testi" required
                      class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none p-2 h-28">{{ old('testi', $testimonial->testi) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Current Image:</label>
            @if ($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" class="w-24 h-auto rounded-md mb-2">
            @else
                <p class="text-sm italic text-gray-500">No Picture</p>
            @endif
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Change Image (Optional)</label>
            <input type="file" name="image"
                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0 file:text-sm file:font-semibold
                          file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
        </div>

        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('testimonials.index') }}" class="text-sm text-gray-600 hover:underline">← Back</a>
            <button type="submit"
        class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
    Save Changes
</button>

        </div>
    </form>
</div>
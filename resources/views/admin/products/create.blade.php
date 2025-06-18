<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create New Product</title>
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
  <div class="max-w-3xl mx-auto px-4 py-12">
    <div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100">
      <h1 class="text-3xl font-bold mb-8 text-emerald-600">Add Products</h1>
      @if ($errors->any())
      <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form class="space-y-6" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
          <label class="block text-sm font-semibold mb-1">Title</label>
          <input
            type="text"
            name="title"
            class="w-full border border-gray-300 rounded-xl px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
            placeholder="Enter a clear and concise product name"
            required>
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1">Description</label>
          <textarea
            id="description"
            name="description"
            class="w-full border border-gray-300 rounded-xl px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 min-h-[200px]"
            placeholder="Describe your product in detail. Highlight key features, benefits, and target audience."
            rows="4"
            style="display: none;">
          </textarea>
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1">Image</label>
          <input
            type="file"
            name="image"
            class="custom-file-input w-full text-gray-700 border border-gray-300 rounded-lg px-4 py-2 shadow-sm bg-white transition"
            required>
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1">Category</label>
          <select
            name="product_category_id"
            class="w-full border border-gray-300 rounded-xl px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
            required>
            <option value="">-- Select a category --</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1">Status</label>
          <div class="flex items-center gap-6 mt-2">
            <label class="inline-flex items-center">
              <input type="radio" name="status" value="enable" class="accent-emerald-500" checked>
              <span class="ml-2">Enable</span>
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="status" value="disable" class="accent-emerald-500">
              <span class="ml-2">Disable</span>
            </label>
          </div>
        </div>
        <div class="flex justify-end gap-4 pt-4">
          <a href="{{ route('product.index') }}" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition">
            Back
          </a>
          <button type="submit" class="px-6 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-600 text-white font-semibold shadow-md transition">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
  <script>
  let editorInstance;
  
  ClassicEditor
    .create(document.querySelector('#description'), {
      toolbar: [
        'heading', '|',
        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
        'undo', 'redo'
      ]
    })

    .then(editor => {
      editorInstance = editor;

      document.querySelector('form').addEventListener('submit', function (e) {
        document.querySelector('#description').value = editorInstance.getData();
      });
    })

    .catch(error => {
      console.error(error);
    });
    </script>
</body>
</html>

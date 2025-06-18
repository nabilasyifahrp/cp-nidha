<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Panel Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .bg-brand-green { background-color: #198754; }
    .text-brand-green { color: #198754; }
  </style>
</head>
<body class="bg-gradient-to-br from-white via-sky-50 to-emerald-100 text-gray-800 min-h-screen">
  <header class="bg-white sticky top-0 z-50 shadow-md">
    <nav class="container max-w-screen-xl mx-auto px-4 py-4 flex justify-end items-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-2 px-5 py-2 bg-[#198754] hover:bg-green-700 text-white text-sm sm:text-base font-semibold rounded-xl shadow transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1" />
                </svg>
                Logout
            </button>
        </form>
    </nav>
  </header>

  <main class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-brand-green mb-10 text-center"><a href="{{ route('admin.panel') }}" class="cursor-pointer">Panel Admin</a></h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Data Product -->
      <a href="{{ route('product.index') }}"
         class="group relative overflow-hidden bg-white border border-green-100 rounded-2xl shadow-md p-6 transform transition-transform hover:scale-105 duration-300 hover:shadow-xl hover:border-green-300">
        <div class="flex items-center space-x-4">
          <div class="bg-brand-green p-3 rounded-full text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 16h8M8 12h8m-6-8h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z" />
            </svg>
          </div>
          <div>
            <h2 class="text-xl font-semibold">Data Service/Product</h2>
            <p class="text-sm text-gray-500">Manage the services or products.</p>
          </div>
        </div>
      </a>

      <!-- Data Team -->
      <a href="{{ route('team.index') }}"
         class="group relative overflow-hidden bg-white border border-blue-100 rounded-2xl shadow-md p-6 transform transition-transform hover:scale-105 duration-300 hover:shadow-xl hover:border-blue-300">
        <div class="flex items-center space-x-4">
          <div class="bg-blue-500 p-3 rounded-full text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a4 4 0 00-4-4h-1m-4 6v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2h5" />
              <circle cx="9" cy="7" r="4" />
              <circle cx="17" cy="7" r="4" />
            </svg>
          </div>
          <div>
            <h2 class="text-xl font-semibold">Data Team</h2>
            <p class="text-sm text-gray-500">Manage team members.</p>
          </div>
        </div>
      </a>

      <!-- Data Portfolio -->
      <a href="{{ route('portfolio.index') }}"
         class="group relative overflow-hidden bg-white border border-purple-100 rounded-2xl shadow-md p-6 transform transition-transform hover:scale-105 duration-300 hover:shadow-xl hover:border-purple-300">
        <div class="flex items-center space-x-4">
          <div class="bg-purple-600 p-3 rounded-full text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c1.1046 0 2-.8954 2-2s-.8954-2-2-2-2 .8954-2 2 .8954 2 2 2z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 14s-1.5-2-4-2-4 2-4 2v1h8v-1z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2 12l10 10 10-10" />
            </svg>
          </div>
          <div>
            <h2 class="text-xl font-semibold">Data Portfolio</h2>
            <p class="text-sm text-gray-500">Manage projects and company work results.</p>
          </div>
        </div>
      </a>

      <!-- Data Client -->
      <a href="{{ route('client.index') }}"
         class="group relative overflow-hidden bg-white border border-yellow-100 rounded-2xl shadow-md p-6 transform transition-transform hover:scale-105 duration-300 hover:shadow-xl hover:border-yellow-300">
        <div class="flex items-center space-x-4">
          <div class="bg-yellow-500 p-3 rounded-full text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h3.586a1 1 0 01.707.293l1.414 1.414A1 1 0 0013.414 6H17a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
          </div>
          <div>
            <h2 class="text-xl font-semibold">Data Client</h2>
            <p class="text-sm text-gray-500">Manage clients who have collaborated.</p>
          </div>
        </div>
      </a>

      <!-- ✅ Data Testimonials (Tambahan Baru) -->
      <a href="{{ route('testimonials.index') }}"
         class="group relative overflow-hidden bg-white border border-pink-100 rounded-2xl shadow-md p-6 transform transition-transform hover:scale-105 duration-300 hover:shadow-xl hover:border-pink-300">
        <div class="flex items-center space-x-4">
          <div class="bg-pink-500 p-3 rounded-full text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8a9 9 0 110-18 9 9 0 010 18z" />
            </svg>
          </div>
          <div>
            <h2 class="text-xl font-semibold">Data Testimonials</h2>
            <p class="text-sm text-gray-500">Manage customer testimonials for your company.</p>
          </div>
        </div>
      </a>

    </div>
  </main>
</body>
</html>

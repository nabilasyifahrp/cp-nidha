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
    </style>
</head>

<body class="bg-white min-h-screen">
    <header class="bg-white px-4 sm:px-8 md:px-20 py-4 flex justify-between items-center shadow-xl">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('assets/images/logo_perusahaan/nice.png') }}" class="h-16 w-auto" />
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                class="flex items-center gap-2 bg-orange-400 hover:bg-orange-500 text-white px-4 py-2 rounded-full font-medium shadow transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </header>

    <main class="container mx-auto px-4 sm:px-6 py-10 text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-10 text-yellow-900">Dashboard Admin</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <a href="{{ route('trainings.index') }}"
                class="bg-yellow-400 hover:bg-yellow-500 text-yellow-900 hover:text-yellow-100 rounded-xl shadow-lg p-8 sm:p-10 flex flex-col items-center gap-4 transform hover:scale-105 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 sm:w-20 sm:h-20" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 2H6zm7 1.5L18.5 9H14a1 1 0 0 1-1-1V3.5zM8 13h8v2H8v-2zm0 4h5v2H8v-2z" />
                </svg>
                <h3 class="text-lg sm:text-xl font-bold">Manage Training</h3>
            </a>

            <a href="{{ route('advantages.index') }}"
                class="bg-indigo-400 hover:bg-indigo-500 text-indigo-900 hover:text-indigo-100 rounded-xl shadow-lg p-8 sm:p-10 flex flex-col items-center gap-4 transform hover:scale-105 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 sm:w-20 sm:h-20" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path d="M3 3v18h18v-2H5V3H3zm6 13h2V8H9v8zm4 0h2v-5h-2v5zm4 0h2v-9h-2v9z" />
                </svg>
                <h3 class="text-lg sm:text-xl font-bold">Manage Advantages</h3>
            </a>

            <a href="{{ url('/team') }}"
    class="bg-orange-400 hover:bg-orange-500 text-orange-900 hover:text-orange-100 rounded-xl shadow-lg p-8 sm:p-10 flex flex-col items-center gap-4 transform hover:scale-105 transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 sm:w-20 sm:h-20" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                </svg>
                <h3 class="text-lg sm:text-xl font-bold">Manage Teams</h3>
            </a>

            <a href="{{ url('/partners') }}"
    class="bg-red-400 hover:bg-red-500 text-red-900 hover:text-red-100 rounded-xl shadow-lg p-8 sm:p-10 flex flex-col items-center gap-4 transform hover:scale-105 transition duration-300">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 sm:w-20 sm:h-20" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V20h6v-2h2v2h6v-3.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.06 1.97 3.45V20h5v-3.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
                <h3 class="text-lg sm:text-xl font-bold">Manage Partners</h3>
            </a>

            <a href="{{ route('service.index') }}"
                class="bg-purple-400 hover:bg-purple-500 text-purple-900 hover:text-purple-100 rounded-xl shadow-lg p-8 sm:p-10 flex flex-col items-center gap-4 transform hover:scale-105 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 sm:w-20 sm:h-20" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path d="M9 2a1 1 0 0 0-1 1v1H7a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3h-1V3a1 1 0 0 0-1-1H9Zm1 2h4v1h-4V4Zm-1 6h6v2H9v-2Zm0 4h4v2H9v-2Z"/>
                </svg>
                <h3 class="text-lg sm:text-xl font-bold">Manage Service</h3>
            </a>
        </div>
    </main>
</body>

</html>
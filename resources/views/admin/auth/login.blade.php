<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Login Admin</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-8">
    <div class="flex flex-col lg:flex-row max-w-6xl w-full gap-6">
        <div class="w-full lg:w-1/2 flex justify-center items-center p-4">
            <img src="{{ asset('assets/images/login.png') }}"
                class="w-3/4 sm:w-2/3 md:w-full max-w-sm md:max-w-md lg:max-w-lg">
        </div>

        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <div
                class="bg-white rounded-2xl shadow-2xl p-8 sm:p-10 border border-gray-100 w-full max-w-md mb-4 sm:mb-10">
                <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Login Admin</h2>
                <form method="POST" action="{{ route('authenticate') }}" class="space-y-6">
                    @csrf
                    <div class="relative">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                            class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="Password" required
                            class="w-full pl-10 pr-10 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500">

                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-60" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M17 8h-1V6a4 4 0 00-8 0v2H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V10a2 2 0 00-2-2zm-6 6.73V17a1 1 0 002 0v-2.27a2 2 0 10-2 0zM10 8V6a2 2 0 114 0v2h-4z" />
                            </svg>
                        </div>

                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="h-5 w-5 text-gray-400">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path fill-rule="evenodd"
                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="h-5 w-5 text-gray-400 hidden">
                                <path
                                    d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
                                <path
                                    d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
                                <path
                                    d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
                            </svg>
                        </button>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-700 text-white font-semibold py-2 rounded-lg hover:bg-blue-800 transition">
                        Login
                    </button>
                </form>
                @if ($errors->has('email'))
                    <div class="mt-6 bg-red-100 border border-red-300 text-red-600 px-4 py-3 rounded-md text-sm">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const eyeOpen = document.getElementById("eyeOpen");
            const eyeClosed = document.getElementById("eyeClosed");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeOpen.classList.add("hidden");
                eyeClosed.classList.remove("hidden");
            } else {
                passwordInput.type = "password";
                eyeOpen.classList.remove("hidden");
                eyeClosed.classList.add("hidden");
            }
        }
    </script>
</body>
</html>
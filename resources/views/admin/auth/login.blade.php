<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <title>Login</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#198754] via-[#1e7e63] to-[#a8d5c2] flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 border border-gray-100">
    <h2 class="text-center text-3xl font-semibold text-gray-800 mb-8">Login</h2>
    <form method="POST" action="{{ route('authenticate') }}">
      @csrf
      <div class="mb-5">
        <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
        <div class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-gray-50 focus-within:ring-2 focus-within:ring-[#198754]/50">
          <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4V4zm0 0l8 8 8-8" />
          </svg>
          <input type="email" name="email" id="email" placeholder="Masukkan email"
            class="w-full bg-transparent outline-none text-sm" required />
        </div>
      </div>

      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
        <div class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-gray-50 focus-within:ring-2 focus-within:ring-[#198754]/50 relative">
          <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16 11V7a4 4 0 00-8 0v4M5 11h14a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2z" />
          </svg>
          <input type="password" name="password" id="password" placeholder="Masukkan password"
            class="w-full bg-transparent outline-none text-sm pr-10" required />
          <button type="button" onclick="togglePassword()" class="absolute right-3">
            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-400">
              <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
            </svg>

            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-400 hidden">
              <path d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
              <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
              <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
            </svg>
          </button>
        </div>
      </div>

      <button type="submit"
        class="w-full bg-[#198754] hover:bg-[#157145] text-white py-3 rounded-lg text-sm font-semibold shadow-lg transition-all duration-200">
        Login
      </button>
    </form>

    @if ($errors->has('email'))
    <div class="mt-6 bg-red-100 border border-red-300 text-red-600 px-4 py-3 rounded-md text-sm">
      {{ $errors->first('email') }}
    </div>
    @endif
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
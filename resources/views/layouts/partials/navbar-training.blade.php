<header class="bg-white shadow-md sticky top-0 z-50 px-4 md:rounded-b-[48px]">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/images/logo_perusahaan/nice.png') }}" alt="Nice Logo" class="w-16 h-16">
        </a>

        <nav class="hidden md:flex space-x-6 items-center relative">
            <a href="#" class="text-gray-800 font-semibold hover:text-orange-500 transition">Home</a>
            <a href="#" class="text-gray-800 font-semibold hover:text-orange-500 transition">Training</a>
            <a href="#" class="text-gray-800 font-semibold hover:text-orange-500 transition">Trainer</a>

            <div class="relative group">
                <button class="text-gray-800 font-semibold hover:text-orange-500 transition flex items-center">
                    About Us
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-52 bg-white rounded-md shadow-lg hidden group-hover:block z-50">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-100" style="font-family: 'Inter', sans-serif;">Training Center</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-100" style="font-family: 'Inter', sans-serif;">Man Power Supply</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-100" style="font-family: 'Inter', sans-serif;">Internet of Things</a>
                </div>
            </div>

            <a href="#" class="border-2 border-orange-400 text-orange-400 px-5 py-2 rounded-full font-semibold hover:bg-orange-400 hover:text-white transition">
                Contact Us
            </a>
        </nav>

        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="#" class="block py-2 text-gray-800 font-semibold hover:text-orange-500">Home</a>
        <a href="#" class="block py-2 text-gray-800 font-semibold hover:text-orange-500">Training</a>
        <a href="#" class="block py-2 text-gray-800 font-semibold hover:text-orange-500">Trainer</a>

        <div class="pt-2">
            <button id="about-toggle" class="w-full text-left py-2 text-gray-800 font-semibold hover:text-orange-500 flex justify-between items-center">
                About Us
                <svg class="w-4 h-4 ml-2 transition-transform" id="about-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="about-submenu" class="ml-4 space-y-1 mt-1 hidden">
                <a href="#" class="block text-gray-800 hover:text-orange-500" style="font-family: 'Inter', sans-serif;">Training Center</a>
                <a href="#" class="block text-gray-800 hover:text-orange-500" style="font-family: 'Inter', sans-serif;">Man Power Supply</a>
                <a href="#" class="block text-gray-800 hover:text-orange-500" style="font-family: 'Inter', sans-serif;">Internet of Things</a>
            </div>
        </div>

        <a href="#" class="block mt-2 border-2 border-orange-400 text-orange-400 px-5 py-2 rounded-full font-semibold hover:bg-orange-400 hover:text-white transition">
            Contact Us
        </a>
    </div>
</header>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    document.getElementById('about-toggle').addEventListener('click', function() {
        const submenu = document.getElementById('about-submenu');
        const icon = document.getElementById('about-icon');
        submenu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });
</script>
<header class=" bg-gray-800 text-white fixed w-full z-50 transition-all duration-300 ease-in-out" id="navbar">
    <nav class="w-full py-4 px-12 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <div class="flex flex-col">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold text-emerald-400 hover:text-blue-500 transition-all ">Umkm
                    Unggulan</a>
                <a href="{{ route('home') }}" class="text-sm font-normal">Desa Karangbendo</a>
            </div>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <ul id="nav-links" class="hidden md:flex md:space-x-8">
            <li><a href="{{ route('home') }}" class="hover:bg-blue-700 transition-all py-2 px-3 rounded">Home</a></li>
            <li><a href="{{ route('umkm') }}" class="hover:bg-blue-700 transition-all py-2 px-3 rounded">UMKM &
                    Produk</a></li>
            <li><a href="{{ route('berita') }}" class="hover:bg-blue-700 transition-all py-2 px-3 rounded">Berita</a>
            </li>
        </ul>
    </nav>
    <ul id="mobile-nav" class="menu-enter hidden flex-col md:hidden bg-gray-800 text-white">
        <li><a href="{{ route('home') }}" class="block py-2 px-12 hover:bg-gray-700">Home</a></li>
        <hr class="border-gray-400 w-1/2 ml-12">
        <li><a href="{{ route('umkm') }}" class="block py-2 px-12 hover:bg-gray-700">UMKM & Produk</a></li>
        <hr class="border-gray-400 w-1/3 ml-12">
        <li><a href="{{ route('berita') }}" class="block py-2 px-12 hover:bg-gray-700">Berita</a></li>
        <hr class="border-gray-400 w-1/5 ml-12">

    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileNav = document.getElementById('mobile-nav');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const navbar = document.getElementById('navbar');

            menuToggle.addEventListener('click', function() {
                if (mobileNav.classList.contains('hidden')) {
                    mobileNav.classList.remove('hidden');
                    setTimeout(() => {
                        mobileNav.classList.add('menu-enter-active');
                    }, 30);
                } else {
                    mobileNav.classList.remove('menu-enter-active');
                    setTimeout(() => {
                        mobileNav.classList.add('hidden');
                    }, 300);
                }

                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-opacity-100');
                } else {
                    navbar.classList.remove('bg-opacity-100');
                }
            });
        });
    </script>
</header>

<x-layout>
    <x-slot name="title">Batik - Kebanggaan Desa Karangbendo</x-slot>

    <section class="relative bg-gray-100 w-full min-h-screen flex flex-col justify-center items-center overflow-hidden"
        style="background-image: url({{ asset('images/batik-pattern.png') }}); background-repeat: repeat; background-size: 200px;">

        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <h3 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-700 animate-text-fade">
                Batik <span class="text-indigo-600">Karangbendo</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <div
                    class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                    <div class="relative h-40 mb-4">
                        <i
                            class="ri-color-filter-fill text-6xl text-pink-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                        <img src="{{ asset('images/srikandiBatik.JPG') }}" alt="Batik Srikandi"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </div>
                    <h4 class="text-xl font-semibold mb-2 text-pink-900">Batik Srikandi</h4>
                    <p class="text-gray-700">Motif yang terinspirasi dari kekuatan dan keanggunan pahlawan wanita.</p>
                </div>

                <div
                    class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                    <div class="relative h-40 mb-4">
                        <i
                            class="ri-flower-line text-6xl text-purple-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                        <img src="{{ asset('images/larasatiBatik.JPG') }}" alt="Batik Larasati"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </div>
                    <h4 class="text-xl font-semibold mb-2 text-purple-900">Batik Larasati</h4>
                    <p class="text-gray-700">Paduan motif floral yang anggun dengan warna-warna cerah.</p>
                </div>

                <div
                    class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                    <div class="relative h-40 mb-4">
                        <i
                            class="ri-vip-crown-2-line text-6xl text-blue-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                        <img src="{{ asset('images/pandawaBatik.JPG') }}" alt="Batik Pandawa"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </div>
                    <h4 class="text-xl font-semibold mb-2 text-blue-900">Batik Pandawa</h4>
                    <p class="text-gray-700">Motif yang menggambarkan nilai-nilai kepahlawanan dan kebijaksanaan.</p>
                </div>
            </div>
        </div>

        <div
            class="absolute bottom-56 left-0 w-64 h-64 bg-yellow-300 opacity-20 blur-3xl rounded-full transform translate-x-1/2 translate-y-1/2 animate-pulse">
        </div>
        <div
            class="absolute top-56 right-0 w-64 h-64 bg-violet-300 opacity-20 blur-3xl rounded-full transform -translate-x-1/2 -translate-y-1/2 animate-pulse delay-1000">
        </div>
    </section>

    <section
        class="relative p-6 md:p-12 w-full bg-gray-100 text-gray-800 min-h-screen flex flex-col justify-center items-center overflow-hidden"
        style="background-image: url({{ asset('images/batik-pattern.png') }}); background-repeat: repeat; background-size: 200px;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Batik Srikandi -->
            <div class="flex flex-col lg:flex-row mb-24 gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-pink-600">
                        Batik Srikandi
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Batik Srikandi menggambarkan kekuatan dan keanggunan pahlawan wanita dalam pewayangan. Motif ini
                        mencerminkan semangat perjuangan dan keberanian.
                    </p>
                    <a href="{{ route('umkm') }}"
                        class="inline-block bg-pink-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-pink-700 transition duration-300">
                        Lihat Koleksi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/srikandiBatik.JPG') }}" alt="Batik Srikandi"
                            class="w-full h-auto object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>

            <!-- Batik Larasati -->
            <div class="flex flex-col lg:flex-row-reverse mb-24 gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-purple-600">
                        Batik Larasati
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Batik Larasati memadukan motif floral yang anggun dengan warna-warna cerah, mencerminkan
                        kecantikan alam dan keindahan bunga-bunga di Karangbendo.
                    </p>
                    <a href="{{ route('umkm') }}"
                        class="inline-block bg-purple-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-purple-700 transition duration-300">
                        Lihat Koleksi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/larasatiBatik.JPG') }}" alt="Batik Larasati"
                            class="w-full h-auto object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>

            <!-- Batik Pandawa -->
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-blue-600">
                        Batik Pandawa
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Batik Pandawa menggambarkan nilai-nilai kepahlawanan dan kebijaksanaan dari lima Pandawa dalam
                        cerita Mahabharata, menyimbolkan kearifan lokal Karangbendo.
                    </p>
                    <a href="{{ route('umkm') }}"
                        class="inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">
                        Lihat Koleksi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/pandawaBatik.JPG') }}" alt="Batik Pandawa"
                            class="w-full h-auto object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-start">
                <a href="{{ route('home') }}"
                    class="inline-block bg-white shadow-lg text-gray-800 font-semibold py-2 px-8 rounded-lg text-lg ">
                    Kembali
                </a>
            </div>
        </div>
    </section>

    <style>
        @keyframes text-fade {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-text-fade {
            animation: text-fade 1.2s ease-out forwards;
        }

        .animate-bounce {
            animation: bounce 2s infinite;
        }
    </style>
</x-layout>

<x-layout>
    <x-slot name="title">Wisata - Unggulan Desa Karangbendo</x-slot>

    <section
        class="relative bg-gray-100 w-full min-h-screen flex flex-col justify-center items-center overflow-hidden pt-36 sm:pt-24 md:pt-32 lg:pt-10"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">


        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <h3 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 text-gray-700 animate-text-fade">
                Wisata Desa <span class="text-indigo-600">Karangbendo</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <div
                    class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                    <div class="relative h-40 mb-4">
                        <i
                            class="ri-water-flash-line text-6xl text-blue-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                        <img src="{{ asset('images/ail.jpg') }}" alt="Air Terjun Karangbendo"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </div>
                    <h4 class="text-xl font-semibold mb-2 text-blue-900">Agrowisata Alam Indah Lestari</h4>
                    <p class="text-gray-700">Nikmati kesejukan kolam alami yang memukau.</p>
                </div>

                <a href="https://pondokapung.com/">
                    <div
                        class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                        <div class="relative h-40 mb-4">
                            <i
                                class="ri-ancient-pavilion-line text-6xl text-green-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                            <img src="{{ asset('images/rumah makan apung.jpg') }}" alt="Desa Wisata Tradisional"
                                class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        </div>
                        <h4 class="text-xl font-semibold mb-2 text-blue-900">Rumah Makan Pondok Apung</h4>
                        <p class="text-gray-700">Nikmati sajian kuliner yang lezat dan nikmati pemandangan
                            asri.</p>
                    </div>
                </a>
                <div
                    class="bg-white bg-opacity-90 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 overflow-hidden group">
                    <div class="relative h-40 mb-4">
                        <i
                            class="ri-contrast-drop-line text-6xl text-yellow-600 absolute inset-0 flex items-center justify-center transition-all duration-500 group-hover:scale-150 group-hover:rotate-12 group-hover:opacity-0"></i>
                        <img src="{{ asset('images/pancoran.jpg') }}" alt="Kebun Buah Karangbendo"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </div>
                    <h4 class="text-xl font-semibold mb-2 text-blue-900">
                        Pancoran</h4>
                    <p class="text-gray-700">Ajak keluarga liburan ke sini.</p>
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

    <style>
        @keyframes textFade {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .animate-text-fade {
            animation: textFade 3s ease-in-out infinite;
        }
    </style>

    <style>
        @keyframes textFade {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .animate-text-fade {
            animation: textFade 3s ease-in-out infinite;
        }
    </style>

    <style>
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }
    </style>

    <div class="flex items-center justify-center p-6 bg-gray-100">
        <div class="text-center mt-12 md:mt-6 lg:mt-0">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 tracking-tight">
                Daftar Wisata
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full mb-2 md:mb-4 lg:mb-8"></div>
        </div>
    </div>
    <section
        class="relative p-6 md:p-12 w-full bg-gray-100 text-gray-800 min-h-screen flex flex-col justify-center items-center overflow-hidden"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Agrowisata Alam Indah Lestari (AIL) -->
            <div class="flex flex-col lg:flex-row mb-24 gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-indigo-600">
                        Agrowisata Alam Indah Lestari (AIL)
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Tempat wisata yang menawarkan keindahan alam, area perkebunan, dan berbagai fasilitas edukatif
                        bagi para pengunjung.
                    </p>
                    <a href="https://maps.app.goo.gl/oSVtrsQQ7aDNsFi66"
                        class="inline-block bg-indigo-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-indigo-700 transition duration-300">
                        Lihat Lokasi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/ail.jpg') }}" alt="Agrowisata Alam Indah Lestari"
                            class="w-full h-auto object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>

            <!-- Rumah Makan Pondok Apung -->
            <div class="flex flex-col lg:flex-row-reverse mb-24 gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-indigo-600">
                        Rumah Makan Pondok Apung
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Nikmati sajian kuliner yang lezat dan unik sambil menikmati pemandangan asri di Rumah Makan
                        Pondok Apung.
                    </p>
                    <a href="https://maps.app.goo.gl/4SyXARSw41uEtvAj6"
                        class="inline-block bg-indigo-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-indigo-700 transition duration-300">
                        Lihat Lokasi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/rumah makan apung.jpg') }}" alt="Rumah Makan Pondok Apung"
                            class="w-full h-auto object-cover transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>

            <!-- Kolam Renang dan Taman Hiburan Keluarga Pancoran -->
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-indigo-600">
                        Kolam Renang dan Taman Hiburan Keluarga Pancoran
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Tempat rekreasi keluarga yang lengkap dengan kolam renang dan area bermain untuk anak-anak dan
                        dewasa.
                    </p>
                    <a href="https://maps.app.goo.gl/KAoumwT2evhrMQeBA"
                        class="inline-block bg-indigo-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-indigo-700 transition duration-300">
                        Lihat Lokasi
                    </a>
                </div>
                <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-xl">
                    <div class="relative group">
                        <img src="{{ asset('images/pancoran.jpg') }}"
                            alt="Kolam Renang dan Taman Hiburan Keluarga Pancoran"
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

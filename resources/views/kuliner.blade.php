<x-layout>
    <x-slot name="title">Kuliner - UMKM Desa Karangbendo</x-slot>
    <section class="relative w-full min-h-screen overflow-hidden bg-gradient-to-br from-orange-50 via-white to-yellow-50"
        style="background-image: url({{ asset('images/batik-coklat.png') }}); background-repeat: no-repeat; background-size: cover; background-blend-mode: soft-light;">
        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Konten Utama -->
                <div class="space-y-8 animate-fade-in-up">
                    <span
                        class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full inline-block">
                        Wisata Kuliner
                    </span>
                    <h1 class="text-4xl font-bold leading-tight text-gray-900 md:text-5xl lg:text-6xl">
                        Karangbendo <br><span class="text-orange-600 animate-color-pulse">Surga Kuliner Pedesaan</span>
                    </h1>
                    <p class="text-lg text-gray-700 lg:text-xl max-w-lg">
                        Nikmati kelezatan autentik masakan desa yang menggoda selera, dari hidangan tradisional hingga
                        inovasi kuliner modern.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white rounded-lg bg-orange-600 hover:bg-orange-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="ri-restaurant-line mr-2"></i>
                            Jelajahi Menu
                        </a>
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-orange-600 rounded-lg border border-orange-600 hover:bg-orange-50 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="ri-map-pin-line mr-2"></i>
                            Temukan Lokasi
                        </a>
                    </div>
                </div>

                <!-- Ilustrasi Interaktif -->
                <div class="relative h-96 animate-fade-in">
                    <div
                        class="absolute inset-0 bg-orange-200 rounded-full animate-blob mix-blend-multiply filter blur-xl opacity-70">
                    </div>
                    <div
                        class="absolute inset-0 bg-yellow-200 rounded-full animate-blob animation-delay-2000 mix-blend-multiply filter blur-xl opacity-70">
                    </div>
                    <div
                        class="absolute inset-0 bg-red-200 rounded-full animate-blob animation-delay-4000 mix-blend-multiply filter blur-xl opacity-70">
                    </div>
                    <img src="{{ asset('images/rumah makan apung.jpg') }}" alt="Kuliner Karangbendo"
                        class="relative z-10 w-full h-fit object-contain animate-float rounded-2xl">
                </div>
            </div>

            <!-- Fitur Unggulan -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-10 animate-fade-in">Keunikan Kuliner Kami
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-100">
                        <i class="ri-leaf-line text-4xl text-green-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Bahan Lokal Segar</h3>
                        <p class="text-gray-600 text-sm">Menggunakan bahan-bahan organik langsung dari petani lokal.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                        <i class="ri-fire-line text-4xl text-red-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Resep Turun-temurun</h3>
                        <p class="text-gray-600 text-sm">Cita rasa autentik warisan leluhur yang tak terlupakan.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                        <i class="ri-heart-line text-4xl text-pink-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Suasana Pedesaan</h3>
                        <p class="text-gray-600 text-sm">Nikmati hidangan di tengah keindahan alam desa yang
                            menenangkan.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                        <i class="ri-group-line text-4xl text-purple-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Kelas Memasak</h3>
                        <p class="text-gray-600 text-sm">Pelajari rahasia masakan desa langsung dari koki lokal.</p>
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
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes color-pulse {

            0%,
            100% {
                color: #059669;
            }

            50% {
                color: #10B981;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(20px, -50px) scale(1.1);
            }

            50% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            75% {
                transform: translate(50px, 50px) scale(1.05);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }

        .animate-color-pulse {
            animation: color-pulse 3s infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-blob {
            animation: blob 10s infinite;
        }

        .animate-fade-in {
            animation: fade-in-up 1s ease-out forwards;
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-300 {
            animation-delay: 0.3s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</x-layout>

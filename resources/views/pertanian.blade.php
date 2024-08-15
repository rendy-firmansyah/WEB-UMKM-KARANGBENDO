<x-layout>
    <x-slot name="title">Pertanian - UMKM Desa Karangbendo</x-slot>
    <section class="relative w-full min-h-screen overflow-hidden bg-gradient-to-br from-blue-50 via-white to-green-50"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover; background-blend-mode: soft-light;">
        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Konten Utama -->
                <div class="mt-10 md:mt-4 md:space-y-8 animate-fade-in-up">
                    <span
                        class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full inline-block">
                        Inovasi Pertanian
                    </span>
                    <h1 class="text-4xl font-bold leading-tight text-gray-900 md:text-5xl lg:text-6xl">
                        Karangbendo <br><span class="text-green-600 animate-color-pulse">Menuju Pertanian Masa
                            Depan</span>
                    </h1>
                    <p class="text-lg my-4 lg:my-2 text-gray-700 lg:text-xl max-w-lg">
                        Menyatukan tradisi dan teknologi untuk menciptakan pertanian berkelanjutan yang memberdayakan
                        masyarakat desa.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white rounded-lg bg-green-600 hover:bg-green-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg ">
                            <i class="ri-plant-line mr-2"></i>
                            Mulai Petualangan
                        </a>
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-green-600 rounded-lg border border-green-600 hover:bg-green-50 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="ri-video-line mr-2"></i>
                            Lihat Video Kami
                        </a>
                    </div>
                </div>

                <!-- Ilustrasi Interaktif -->
                <div class="relative h-96 animate-fade-in">
                    <div class="absolute inset-14 md:inset-0 scale-125 sm:scale-100 transform-gpu">
                        <div
                            class="absolute inset-0 bg-green-200 rounded-full animate-blob mix-blend-multiply filter blur-xl opacity-70">
                        </div>
                        <div
                            class="absolute inset-0 bg-blue-200 rounded-full animate-blob animation-delay-2000 mix-blend-multiply filter blur-xl opacity-70">
                        </div>
                        <div
                            class="absolute inset-0 bg-yellow-200 rounded-full animate-blob animation-delay-4000 mix-blend-multiply filter blur-xl opacity-70">
                        </div>
                    </div>
                    <img src="{{ asset('images/modern-farm.jpg') }}" alt="Modern Farming"
                        class="relative z-10 w-full lg:w-4/5 h-fit object-contain animate-float rounded-lg">
                </div>
            </div>

            <!-- Fitur Unggulan -->
            <div class="mt-10 md:mt-32">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-10 animate-fade-in">Keunggulan Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-100">
                        <i class="ri-leaf-line text-4xl text-green-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Pertanian Organik</h3>
                        <p class="text-gray-600 text-sm">Menghasilkan pangan sehat tanpa bahan kimia berbahaya.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                        <i class="ri-heavy-showers-line text-4xl text-blue-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Irigasi Pintar</h3>
                        <p class="text-gray-600 text-sm">Sistem irigasi otomatis berbasis IoT untuk efisiensi air.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                        <i class="ri-recycle-line text-4xl text-yellow-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Zero Waste</h3>
                        <p class="text-gray-600 text-sm">Mengolah limbah pertanian menjadi produk bernilai tambah.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                        <i class="ri-group-line text-4xl text-purple-600 mb-4"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Pemberdayaan Petani</h3>
                        <p class="text-gray-600 text-sm">Program pelatihan dan pendampingan untuk petani lokal.</p>
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

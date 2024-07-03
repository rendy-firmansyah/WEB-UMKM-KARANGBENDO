<x-layout>
    <x-slot name="title">Home - UMKM Unggulan Desa Karangbendo</x-slot>


    <section class=" px-8 w-full flex flex-col lg:flex-row bg-gray-800 text-gray-100 items-center min-h-screen"
        id="hero">
        <div class="w-full lg:w-1/2">
            <div class="my-4">
                <span class="text-sm bg-gray-700 px-3 py-1 rounded-full text-gray-100">#umkmmaju</span>
            </div>
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-8">Selamat datang di UMKM
                Unggulan Desa
                <span class="text-blue-500">Karangbendo</span>
            </h1>
            <p class="text-sm sm:text-md md:text-lg mb-4">Kenalan lebih dekat yuk tentang UMKM unggulan apa
                saja yang ada di Desa Karangbendo</p>

            <a href="#">
                <button
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-full transition-all">Selengkapnya
                </button>
            </a>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/hero-img.png') }}" alt="ragam-batik" class="w-2/3 md:w-3/4 lg:w-1/2">
        </div>
    </section>


    <section>

    </section>
</x-layout>

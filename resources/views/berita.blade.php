<x-layout>
    <x-slot name="title">Berita - UMKM Unggulan Desa Karangbendo</x-slot>

    <section class="p-6 md:p-12 pt-24 sm:pt-20 md:pt-24 w-full bg-gray-800 sm:py-24 text-gray-100 min-h-screen"
        id="hero"
        style="background-image: url({{ asset('images/bg-batik2.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="flex flex-col">
            <h2 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">Berita terbaru
                <span class="text-blue-500">Desa</span>
            </h2>
            <p class="text-xs sm:text-sm md:text-md lg:text-lg mb-2">Jelajahi berita terupdate tentang peristiwa atau
                kegiatan yang ada di Desa Karangbendo</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 py-8">
                <div class="block rounded-lg bg-white">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg"
                            alt="" />
                        <a href="{{ route('detail-berita') }}">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface text-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Title</h5>
                        <p class="text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <p class="text-sm text-gray-800 font-medium py-4">4 Juli 2024 | Author</p>
                        <a href="{{ route('detail-berita') }}">
                            <button type="button"
                                class="bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md lg:text-xs font-medium py-3 px-8 transition-all rounded"
                                data-twe-ripple-init data-twe-ripple-color="light">
                                Baca Berita
                            </button>
                        </a>
                    </div>
                </div>
                <div class="block rounded-lg bg-white">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg"
                            alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface text-gray-800">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Title</h5>
                        <p class="text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <p class="text-sm text-gray-800 font-medium py-4">4 Juli 2024 | Author</p>
                        <a href="{{ route('detail-berita') }}">
                            <button type="button"
                                class="bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md lg:text-xs font-medium py-3 px-8 transition-all rounded"
                                data-twe-ripple-init data-twe-ripple-color="light">
                                Baca Berita
                            </button>
                        </a>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak kartu di sini jika diperlukan -->
            </div>
        </div>
    </section>



</x-layout>

<x-layout>
    <x-slot name="title">Detail Berita - UMKM Unggulan Desa Karangbendo</x-slot>

    <section class="p-12 pt-24 sm:pt-32 md:pt-24 lg:pt-28 w-full bg-gray-100 sm:py-24 text-gray-800 min-h-screen"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <article class="flex flex-col">
            <h1 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">Detail
                <span class="text-blue-500">Berita</span>
            </h1>
            @forelse ($beritaAll as $item)
                <h2 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-semibold mb-3 leading-8">
                    {{ $item->judul_berita }}
                </h2>
                <div class="flex items-center">
                    <p class="text-xs sm:text-sm md:text-md lg:text-lg">{{ $item->author }}</p>
                    <p class="text-xs sm:text-sm md:text-md lg:text-lg mx-4">|</p>
                    <i class="ri-calendar-fill mr-2"></i>
                    <p class="text-xs sm:text-sm md:text-md lg:text-lg">
                        {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('d F Y') }}</p>
                </div>
                <figure class="bg-white p-3 rounded-lg max-w-lg shadow-xl relative overflow-hidden my-3">
                    <img class="w-full h-48 sm:h-32 md:h-48 lg:h-64 object-cover rounded-lg"
                        src="{{ asset('images/content/' . $item->gambar_berita) }}" alt="{{ $item->judul_berita }}">
                </figure>

                <p class="text-xs sm:text-sm md:text-md lg:text-lg my-4">{{ $item->isi_konten }}</p>
            @empty
                <p class="text-center text-red-500 font-bold text-xl">Belum ada berita</p>
            @endforelse
        </article>
        <div class="w-48">
            <a href="{{ route('berita') }}">
                <button
                    class="my-4 w-full bg-red-600 hover:bg-red-700 text-gray-100 text-sm md:text-md lg:text-lg font-medium py-2 px-8 transition-all rounded-lg">
                    Kembali
                </button>
            </a>
        </div>
    </section>
</x-layout>

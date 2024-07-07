<x-layout>
    <x-slot name="title">Detail Berita - UMKM Unggulan Desa Karangbendo</x-slot>

    <section class="p-12 pt-24 sm:pt-32 md:pt-24 lg:pt-28 w-full bg-gray-100 sm:py-24 text-gray-800 min-h-screen"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <article class="flex flex-col">
            <h1 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">Detail
                <span class="text-blue-500">Berita</span>
            </h1>
            <h2 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">
                Title
            </h2>
            <div class="flex items-center">
                <p class="text-xs sm:text-sm md:text-md lg:text-lg">Author</p>
                <p class="text-xs sm:text-sm md:text-md lg:text-lg mx-4">|</p>
                <i class="ri-calendar-fill mr-2"></i>
                <p class="text-xs sm:text-sm md:text-md lg:text-lg">Date</p>
            </div>
            <figure class="bg-white p-3 rounded-lg max-w-lg shadow-xl relative overflow-hidden my-3">
                <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/Batik craft.jpeg') }}"
                    alt="">
            </figure>
            <p class="text-xs sm:text-sm md:text-md lg:text-lg my-4">Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Error quidem vero at repellat, ipsum minus asperiores iste deserunt sunt ipsa corporis. Neque
                aliquam, voluptatum fuga ex assumenda at aliquid beatae. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Earum ea laborum ab, distinctio sapiente sit ut omnis reprehenderit accusantium
                eveniet, officiis ipsum neque magnam perspiciatis, error vero est quo quas?</p>
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

<x-layout>

    <x-slot name="title">UMKM Unggulan Desa Karangbendo</x-slot>
    <section class="p-6 md:p-12 w-full bg-gray-800 text-gray-100 min-h-screen flex flex-col justify-center items-center"
        id="hero"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="flex justify-center items-center flex-col pt-0 md:pt-32 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 leading-snug">
                Selamat datang di
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-teal-500">UMKM
                    Unggulan</span> Desa
                <span class="text-blue-500">Karangbendo</span>
            </h1>
            <p class="text-sm sm:text-base md:text-md lg:text-lg mb-4 mx-auto py-4">
                Lihat Potensi dan keunggulan UMKM unggulan apa saja yang ada di Desa Karangbendo
            </p>
            <a href="#products">
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-800 rounded-full transition-all">
                    Selengkapnya
                </button>
            </a>
        </div>
    </section>
    <section class="flex flex-col bg-gray-100 text-gray-800 p-6 md:p-12 " id="products"
        style="background-image: url({{ asset('images/bg-batikGajahOling.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="flex flex-col mb-4 md:flex-row lg:mb-6 justify-between items-center">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8 text-start">Daftar <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-teal-500">Produk</span>
                &
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-teal-500">UMKM
                </span> Unggulan
            </h3>

            <form class="flex flex-col md:flex-row justify-end space-y-4 md:space-y-0 md:space-x-4 w-full md:w-auto"
                action="{{ route('filterProduk') }}" id="filterForm" method="POST">
                @csrf

                <div class="flex flex-col md:flex-row items-center justify-end gap-4">
                    @if (count($umkms) > 0)
                        <div class="flex w-full max-w-xs justify-end items-center relative">
                            <select name="umkm" id="umkmSelect"
                                class="h-12 w-full lg:w-60 border border-gray-300 text-white pl-10 text-base font-normal bg-blue-500 rounded-full block py-2.5 px-4 relative focus:outline-none transition-all duration-500 hover:bg-blue-600 focus:bg-blue-600">
                                <option value="" selected disabled class="bg-transparent text-white">
                                    @if (request('umkm'))
                                        {{ request('umkm') }}
                                    @else
                                        Pilih UMKM
                                    @endif
                                </option>
                                @foreach ($umkms as $umkm)
                                    @if (!empty($umkm->nama_umkm))
                                        <option value="{{ $umkm->nama_umkm }}" class="bg-gray-100 text-gray-800">
                                            {{ $umkm->nama_umkm }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="flex w-full max-w-xs justify-end items-center relative">
                        <select name="kategori" id="kategoriSelect"
                            class="h-12 w-full lg:w-60 border border-gray-300 text-white pl-10 text-base font-normal bg-blue-500 rounded-full block py-2.5 px-4 relative focus:outline-none transition-all duration-500 hover:bg-blue-600 focus:bg-blue-600">
                            <option value="" selected disabled class="bg-slate-100">Pilih Kategori</option>
                            <option value="Makanan" class="bg-slate-100 text-slate-900"
                                {{ request('kategori') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                            {{-- <option value="Aksesoris" class="bg-slate-100 text-slate-900"
                                {{ request('kategori') == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option> --}}
                            <option value="Fashion" class="bg-slate-100 text-slate-900"
                                {{ request('kategori') == 'Fashion' ? 'selected' : '' }}>Fashion</option>
                            {{-- <option value="Kosmetik" class="bg-slate-100 text-slate-900"
                                {{ request('kategori') == 'Kosmetik' ? 'selected' : '' }}>Kosmetik</option> --}}
                        </select>
                    </div>
                </div>

            </form>
        </div>
        <hr class="border-gray-700 w-full border-2 rounded-full opacity-20">
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-4">
                @forelse ($user as $item)
                    @if ($item->nama_umkm && $item->owner)
                        <div
                            class="transition transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                            @if ($item->foto_profile && file_exists(public_path('images/content/' . $item->foto_profile)))
                                <img class="h-48 w-full object-cover object-center"
                                    src="{{ asset('images/content/' . $item->foto_profile) }}" alt="umkm Image" />
                            @else
                                <div class="h-48 w-full bg-gray-200 flex items-center justify-center gap-3">
                                    <i class="ri-image-line text-3xl  text-indigo-600"></i>
                                    <span class="text-gray-500">Gambar tidak tersedia</span>
                                </div>
                            @endif
                            <div class="p-4">
                                <div class="flex justify-start gap-4 items-center mb-3">
                                    <div class="bg-teal-500 w-10 h-10 rounded-full flex justify-center items-center">
                                        <i class="ri-store-2-fill text-gray-100 text-xl"></i>
                                    </div>
                                    <h2 class="text-md md:text-lg font-bold">{{ $item->nama_umkm }}</h2>
                                </div>
                                <div class="flex justify-start gap-4 items-center">
                                    <div class="bg-blue-500 w-10 h-10 rounded-full flex justify-center items-center">
                                        <i class="ri-user-follow-fill text-gray-100 text-xl"></i>
                                    </div>
                                    <h2 class="text-md md:text-lg font-semibold text-gray-700">{{ $item->owner }}</h2>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('detail-umkm', $item->id) }}">
                                    <button type="button"
                                        class="m-4 bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md font-medium py-2 px-8 transition-all rounded-lg">
                                        Kunjungi UMKM
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-span-full text-center fonmt-bold text-md md:text-xl text-red-500 py-8">
                        Oops! Belum ada UMKM .
                    </div>
                @endforelse
            </div>
        </section>


    </section>

</x-layout>

<script>
    document.getElementById('umkmSelect').addEventListener('change', function() {
        document.getElementById('filterForm').submit();
    });
    document.getElementById('kategoriSelect').addEventListener('change', function() {
        document.getElementById('filterForm').submit();
    });
</script>

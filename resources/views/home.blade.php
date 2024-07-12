<x-layout>
    <x-slot name="title">Home - UMKM Desa Karangbendo - Membangun Ekonomi Lokal dengan Kreativitas</x-slot>


    <section
        class=" p-12 w-full flex flex-col-reverse lg:flex-row md:flex-row bg-gray-800 sm:py-24  text-gray-100 items-center min-h-screen"
        id="hero"
        style="background-image: url({{ asset('images/bg-sectionHome.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="w-full lg:w-1/2 container">
            <div class="my-6 md:my-6 sm:my-0">
                <span
                    class="text-xs sm:text-sm md:text-md lg:text-lg bg-gray-700 px-2 sm:px-3 py-1 rounded-full text-gray-100">#umkmmaju</span>
            </div>
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-8">Selamat datang Desa
                <span class="text-blue-500">Karangbendo</span>
            </h1>
            <p class="text-xs sm:text-sm md:text-md lg:text-lg mb-4 capitalize">Kenalan lebih dekat yuk tentang potensi
                dan
                keunggulan apa
                saja yang ada di Desa Karangbendo</p>

            <a href="#pengenalan">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-800 rounded-full transition-all">Selengkapnya
                </button>
            </a>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/hero-img.png') }}" alt="ragam-batik" class="w-2/3 md:w-3/4 lg:w-1/2">
        </div>


    </section>

    {{-- penegnalan desa section start --}}
    <section class=" p-12 w-full flex flex-col-reverse lg:flex-row md:flex-row bg-gray-100  text-gray-800 items-center "
        id="pengenalan"
        style="background-image: url({{ asset('images/batik-bg-fix.png') }}); background-repeat: no-repeat; background-size: cover">

        <div class="w-full lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/kombinasiDesa.png') }}" alt="ragam-desa" class="w-2/3 md:w-3/4 lg:w-4/5">
        </div>

        <div class="w-full lg:w-1/2 container">
            <div class="my-6 md:my-6 sm:my-0">
                <span
                    class="text-xs sm:text-sm md:text-md lg:text-lg bg-gray-700 px-2 sm:px-3 py-1 rounded-full text-gray-100">#digitalisasiDesa</span>
            </div>
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-3 leading-8">Desa <span
                    class="text-blue-500">Karangbendo</span>
            </h1>
            <p class="text-xs sm:text-sm md:text-md lg:text-lg mb-4 ">
                Desa Karangbendo, terletak di Kecamatan Rogojampi, Kabupaten Banyuwangi, dikenal dengan UMKM yang
                berkembang
                pesat. Desa ini memproduksi kerajinan tangan berkualitas dan makanan olahan tradisional, menjadikannya
                pusat kreativitas dan inovasi lokal.</p>
            <a href="#video">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-800 rounded-full transition-all">
                    Selengkapnya
                </button>
            </a>
            </a>
        </div>
    </section>

    <section class="p-12 w-full flex flex-col bg-gray-100 text-gray-800" id="video">
        <h3 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-5 leading-8 text-center text-blue-500">Cerita
            <span class="text-gray-800">Kami</span>
        </h3>
        <video width="100%" controls autoplay loop muted class="rounded-lg">
            <source src="{{ asset('dist/Umkmunggulan.mp4') }}" type="video/mp4">
        </video>
    </section>
    {{-- penegnalan desa section end --}}


    {{-- potensi section start --}}
    <section class="flex flex-col bg-gray-100 text-gray-800 p-12 ">
        <h3 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8 text-center">Potensi
            <span class="text-blue-500">Desa</span>
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 py-8">

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="w-12 sm:w-20 rounded-full">
                    <img src="{{ asset('images/fashion-icon.png') }}" alt="icon-fashion">
                </div>
                <p>Batik</p>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">

                <p>Makanan</p>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="w-12 sm:w-20 rounded-full">
                    <img src="{{ asset('images/pertanian-icon.png') }}" alt="icon-fashion">
                </div>
                <p>Pertanian</p>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="w-12 sm:w-20 rounded-full">
                    <img src="{{ asset('images/wisata-icon.png') }}" alt="icon-fashion">
                </div>
                <p>Wisata</p>
            </div>
        </div>
    </section>
    {{-- potensi section end --}}


    <section class="p-6 sm:p-12 w-full flex flex-col bg-gray-100 text-gray-800 "
        style="background-image: url({{ asset('images/batik-bg-fix.png') }}); background-repeat: no-repeat; background-size: cover">

        <div class="">
            <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">Letak Demografis
                <span class="text-blue-500">Desa</span>
            </h3>
        </div>


        <div class="container mx-auto p-4">
            <div class="flex flex-col-reverse lg:flex-row justify-center items-center">
                <div class="w-full lg:w-1/2">
                    <p class="text-md md:text-base lg:text-xl py-4 font-bold">Batas <span
                            class="text-blue-500">Wilayah</span></p>
                    <table class="min-w-full bg-gray-800 rounded-lg">
                        <thead>
                            <tr class="border-b border-gray-600">
                                <th
                                    class="text-sm sm:text-base md:text-lg lg:text-xl font-bold p-2 text-gray-100 text-left">
                                    Batas</th>
                                <th
                                    class="text-sm sm:text-base md:text-lg lg:text-xl font-bold p-2 text-gray-100 text-left">
                                    Desa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-600">
                                <td class="text-sm sm:text-base p-2 text-gray-100">Batas Utara</td>
                                <td class="text-sm sm:text-base p-2 text-gray-100">Pakistaji</td>
                            </tr>
                            <tr class="border-b border-gray-600">
                                <td class="text-sm sm:text-base p-2 text-gray-100">Batas Timur</td>
                                <td class="text-sm sm:text-base p-2 text-gray-100">Badean</td>
                            </tr>
                            <tr class="border-b border-gray-600">
                                <td class="text-sm sm:text-base p-2 text-gray-100">Batas Selatan</td>
                                <td class="text-sm sm:text-base p-2 text-gray-100">Rogojampi</td>
                            </tr>
                            <tr>
                                <td class="text-sm sm:text-base p-2 text-gray-100">Batas Barat</td>
                                <td class="text-sm sm:text-base p-2 text-gray-100">Gitik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center items-center mb-4 lg:mb-0">
                    <img class="w-3/4 md:h-1/3 lg:w-4/5" src="{{ asset('images/bwi-location.png') }}" alt="bwi-map">
                </div>
            </div>
        </div>
    </section>


    {{-- luas wilayah section --}}

    <section class="flex flex-col bg-gray-100 text-gray-800 p-12 "
        style="background-image: url({{ asset('images/batik-bg-fix.png') }}); background-repeat: no-repeat; background-size: cover">
        <h3 class="text-xl sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8 text-center">Pembagian
            <span class="text-blue-500">Wilayah</span>
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 py-8">

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Luas Total</p>
                    <p>692.176 Ha</p>
                </div>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold ">Pertnian</p>
                    <p>503.924 Ha</p>
                </div>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Pemukiman</p>
                    <p>55.051 Ha</p>
                </div>
            </div>

            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Jalan</p>
                    <p>19.200 Ha</p>
                </div>
            </div>
            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Makam</p>
                    <p>3.200 Ha</p>
                </div>
            </div>
            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Fasilitas Umum</p>
                    <p>15.210 Ha</p>
                </div>
            </div>
            <div
                class="bg-white py-8 sm:py-12 shadow-xl rounded-3xl flex gap-4 justify-center items-center hover:bg-blue-500 transition-all text-gray-800 hover:text-gray-100 font-semibold text-lg md:text-md sm:text-sm lg:text-lg">
                <div class="flex flex-col">
                    <p class="font-bold">Lain - lain</p>
                    <p>2.280 Ha</p>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col-reverse lg:flex-row items-center justify-center">
            <div class="w-full lg:w-3/5 flex justify-center">
                <x-chart-pembagian-wilayah></x-chart-pembagian-wilayah>
            </div>
            <div class="w-full lg:w-2/5 flex justify-center">
                <img src="{{ asset('images/data-3d.png') }}" alt="data-3d" class="h-full max-h-96">
            </div>
        </div>
    </section>

    {{-- Section wilayah end --}}

    <section class="p-6 sm:p-12 w-full flex flex-col bg-gray-800 sm:py-24 text-gray-100 items-center"
        style="background-image: url({{ asset('images/bg-batik2.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="text-center">
            <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3 leading-8">Lokasi Desa <span
                    class="text-blue-500">Karangbendo</span></h3>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg">Desa Karangbendo di Rogojampi, Banyuwangi, adalah
                desa
                yang dinamis dengan kekayaan budaya dan alam. Terkenal dengan UMKM yang berkembang pesat, Karangbendo
                menghasilkan berbagai produk unggulan seperti kerajinan tangan dan makanan olahan tradisional. Pertanian
                juga menjadi tulang punggung ekonomi desa, dengan hasil bumi segar yang melimpah.</p>
        </div>

        <div class="w-full flex justify-center rounded-3xl mt-6">
            <iframe
                class="w-full sm:w-[600px] md:w-[700px] lg:w-[900px] h-[300px] sm:h-[400px] md:h-[450px] lg:h-[500px] rounded-3xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15791.87703405829!2d114.30702529080826!3d-8.305853634907542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1574cb3bdaae7%3A0x9082cab606c90fdd!2sKarangbendo%2C%20Kec.%20Rogojampi%2C%20Kabupaten%20Banyuwangi%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1720014554825!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    {{-- localtion section end --}}



</x-layout>

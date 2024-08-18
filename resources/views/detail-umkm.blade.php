<x-layout>
    <x-slot name="title">Toko - UMKM Kerupuk Rahayu</x-slot>
    <section class="p-6 md:p-12 w-full bg-gray-100 text-gray-800 min-h-screen flex flex-col" id="hero"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="w-full pt-20">
            <div
                class="flex flex-col md:flex-row lg:flex-row bg-violet-100 rounded-full px-4 lg:px-6 py-2 items-center mb-4 md:mb-6 justify-between flex-wrap shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <h1
                    class="text-lg md:text-2xl lg:text-3xl font-bold leading-snug tracking-wide mb-2 md:mb-0 transition-transform duration-300 ease-in-out transform hover:scale-105">
                    Toko UMKM

                    <span
                        class="bg-gradient-to-r from-blue-500 via-purple-500 to-teal-500 bg-clip-text text-transparent">
                        {{ $umkmStore->nama_umkm }}
                    </span>


                </h1>
                <div class="flex items-center space-x-2 hidden md:flex">
                    <div
                        class="p-2 bg-blue-200 rounded-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        <i class="ri-store-2-line text-xl md:text-2xl lg:text-3xl text-indigo-500"></i>
                    </div>
                    <div
                        class="p-2 bg-blue-200 rounded-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                        <img src="{{ asset('images/content/' . (optional($user)->foto ?? 'default.jpg')) }}"
                            alt="logo-toko" class="w-10 h-10 rounded-full">
                    </div>

                </div>
            </div>


        </div>


        <div class="bg-cyan-100 rounded-full max-w-fit px-6 py-2 flex items-center gap-4 ">
            <h2 class="font-semibold text-md md:text-lg">Tentang Toko UMKM {{ $umkmStore->nama_umkm }}</h2>
            <i class="ri-verified-badge-fill text-emerald-500 text-lg md:text-xl lg:text-2xl"></i>
        </div>

        <div class="my-4 flex">
            <p class="ml-4">{{ optional($user)->deskripsi_toko ?? 'pemilik toko belum mengatur deskripsi...!' }}
            </p>
        </div>


        <div
            class="inline-flex
                items-center max-w-fit group bg-gradient-to-r from-purple-500 to-indigo-400 text-white font-semibold
                text-sm sm:text-base md:text-lg px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full shadow-lg
                transition-all duration-300 ease-in-out hover:shadow-xl">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 mr-1.5 sm:mr-2 transform transition-transform duration-300 group-hover:rotate-12"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <p class="relative">
                Daftar Produk
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
            </p>
        </div>


        <section
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3 md:p-4">
            @forelse ($products as $product)
                <div
                    class="bg-gray-100 rounded-lg shadow-md hover:shadow-lg p-2 sm:p-3 transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative pb-[100%] overflow-hidden rounded-lg">
                        <img class="absolute inset-0 object-cover w-full h-full cursor-pointer transition-transform duration-300 hover:scale-110"
                            src="{{ asset('images/content/' . $product->gambar) }}" alt="Batik Craft"
                            onclick="openModal(this)">
                    </div>
                </div>

                </div>

                <!-- Modal Pop-up -->
                <div id="imageModal"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50 hidden">
                    <div
                        class="relative bg-white rounded-lg p-6 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl w-full mx-4">
                        <button aria-label="Close Modal"
                            class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition duration-200 transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                            onclick="closeModal()">
                        </button>
                        <img id="modalImage" class="object-cover w-full h-auto max-h-[60vh] rounded-lg" src=""
                            alt="Expanded Image">
                        <div class="flex flex-col sm:flex-row gap-4 mt-6">
                            <a href="https://wa.me/{{ $umkmStore->nomor_telepon }}" target="_blank"
                                class="flex-1 bg-emerald-300 text-gray-800 py-3 px-4 transition-all rounded-lg hover:bg-emerald-500 hover:text-white flex items-center justify-center space-x-2 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                <i class="ri-whatsapp-line text-lg"></i>
                                <span class="text-sm sm:text-base">Hubungi Penjual</span>
                            </a>
                            <a id="downloadLink" href="#" download
                                class="flex-1 bg-violet-300 text-gray-800 py-3 px-4 transition-all rounded-lg hover:bg-violet-500 hover:text-white flex items-center justify-center space-x-2 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                                <i class="ri-download-line text-lg"></i>
                                <span class="text-sm sm:text-base">Download Gambar</span>
                            </a>
                        </div>
                        <button onclick="closeModal()"
                            class="w-full mt-4 bg-red-300 text-gray-800 py-3 px-4 transition-all rounded-lg hover:bg-red-500 hover:text-white flex items-center justify-center space-x-2 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <i class="ri-close-circle-line text-lg"></i>
                            <span class="text-sm sm:text-base">Close</span>
                        </button>
                    </div>

                </div>
            @empty
                <p class="text-center text-red-500 font-bold text-xl">Belum ada produk</p>
            @endforelse
        </section>





        {{-- <div class="w-full flex justify-start">
            @foreach ($produk as $item)
                <div
                    class="w-ful p-2 md:p-6 md:w-2/3 lg:w-full bg-white rounded-lg shadow-lg flex flex-col md:flex-row mb-6">
                    <div class="flex justify-center items-center p-4">
                        <div class="relative w-56 h-56 rounded-md overflow-hidden flex justify-center items-center">
                            <img class="object-cover w-full h-full" src="{{ asset('images/content/' . $item->gambar) }}"
                                alt="">
                        </div>
                    </div>

                    <div class="hidden md:block border-r-2 border-gray-300"></div>
                    <div class="flex-1 p-4 font-medium">
                        <h1 class="text-lg font-bold mb-2">{{ $item->nama_produk }}</h1>
                        <table class="table-auto w-full text-left border-collapse">
                            <tbody>
                                <tr>
                                    <td class="text-gray-800 font-semibold align-top w-1/3 md:w-1/4 lg:w-1/5">Deskripsi
                                        Produk</td>
                                    <td class="text-gray-800 align-top w-full break-words">:
                                        {{ $item->deskripsi_produk }}</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-800 font-semibold align-top w-1/3 md:w-1/4 lg:w-1/5">Harga</td>
                                    <td class="text-gray-800 align-top">: Rp.
                                        {{ number_format($item->harga, 0, ',', '.') }}</td>
                                </tr>

                                <tr>
                                    <td class="text-gray-800 font-semibold align-top w-1/3 md:w-1/4 lg:w-1/5">Status
                                    </td>
                                    <td
                                        class="{{ $item->status_produk == 'Tersedia' ? 'text-green-500' : 'text-red-500' }} ">
                                        <span class=" text-black">:</span>
                                        {{ $item->status_produk }}
                                    </td>
                                </tr>
                                <tr class="my-2">
                                    <td class="py-2">Lokasi</td>
                                    <td class="py-2 flex items-center gap-2 text-gray-800 font-semibold">
                                        : <button
                                            class="bg-blue-500 w-full md:w-auto hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full transition-colors ease-in-out">
                                            <a href="{{ $item->user->alamat }}" target="_blank" class="text-white">
                                                Lihat
                                                Peta
                                                <i class="ri-map-pin-line"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="my-4">
                                    <td class="text-gray-800 font-semibold flex-col md:flex-row gap-4">
                                        Hubungi Penjual</td>
                                    <td class="flex-col md:flex-row gap-2 items-center">
                                        : <button class="bg-emerald-500 py-2 px-6 w-full md:w-auto rounded-full">
                                            <a class="flex justify-center items-center w-full h-full text-white font-medium"
                                                href="https://wa.me/{{ $item->user->nomor_telepon }}"> Hubungi Penjual
                                                <i class="ri-whatsapp-line pl-3"></i>
                                            </a>
                                        </button>
                                        <button
                                            class="bg-gradient-to-br from-pink-500 to-violet-500 py-2 px-6 w-full md:w-auto rounded-full mt-2 lg:mt-0">
                                            <a class="flex justify-center items-center w-full h-full text-white font-medium"
                                                href="https://wa.me/{{ $item->user->nomor_telepon }}"> Hubungi Penjual
                                                <i class="ri-instagram-line pl-3"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                        <p class="text-gray-800 font-medium pt-4">Bagikan :</p>

                    
                    </div>
                </div>
            @endforeach
        </div> --}}

        {{-- <div class="flex flex-col md:flex-row gap-3 mt-4 items-center justify-center text-center">
            <p class="text-xl md:text-2xl lg:text-3xl font-bold leading-tight md:leading-normal lg:leading-relaxed">
                Tertarik Dengan Produk-produk di atas? Hubungi Nomor di bawah ini
            </p>
            <i class="ri-arrow-down-line text-3xl md:text-4xl lg:text-5xl text-emerald-500 animate-bounce"></i>
        </div> --}}

        <div
            class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-6 px-6 py-6 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-lg shadow-md">

            <div class="flex-1 text-center sm:text-left">
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800 leading-tight">
                    Tertarik dengan produk-produk di atas?
                </h2>
                <p class="mt-2 text-lg sm:text-xl text-gray-600">
                    Hubungi kami sekarang!
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <a href="https://wa.me/{{ $umkmStore->nomor_telepon }}"
                    class="inline-flex items-center px-6 py-3 bg-green-500 text-white font-semibold rounded-full shadow-md hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
                    <i class="ri-whatsapp-line mr-2 text-xl"></i>
                    WhatsApp
                </a>
                <a href="{{ $umkmStore->alamat }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                    <i class="ri-map-pin-line mr-2 text-xl"></i>
                    Lokasi
                </a>
            </div>

        </div>



        <div class="my-6">
            <p class="text-md md:text-lg font-semibold mb-3">Bagikan Melalui:</p>
            <div
                class="flex flex-wrap max-w-fit items-center gap-3 bg-gradient-to-r from-cyan-100 to-blue-100 rounded-full px-4 py-3 shadow-md">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                    target="_blank"
                    class="transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-full">
                    <i class="ri-facebook-fill text-blue-600 text-2xl"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank"
                    class="transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-full">
                    <i class="ri-twitter-x-fill text-black text-2xl"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text={{ urlencode(Request::fullUrl()) }}" target="_blank"
                    class="transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-green-300 rounded-full">
                    <i class="ri-whatsapp-fill text-green-500 text-2xl"></i>
                </a>
                <a href="https://www.instagram.com/share?url={{ urlencode(Request::fullUrl()) }}" target="_blank"
                    class="transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-pink-300 rounded-full">
                    <i class="ri-instagram-fill text-pink-600 text-2xl"></i>
                </a>
                <button onclick="copyLink()"
                    class="transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-gray-300 rounded-full">
                    <i id="copyIcon" class="ri-file-copy-2-line text-gray-600 text-2xl"></i>
                </button>
            </div>
        </div>

        <div class="w-48">
            <a href="{{ route('umkm') }}">
                <button
                    class="my-4 w-full bg-white shadow-xl hover:bg-slate-100 text-gray-800 text-sm md:text-md lg:text-lg font-medium py-2 px-8 transition-all rounded-lg">
                    Kembali
                </button>
            </a>
        </div>


    </section>


    <script>
        function openModal(imgElement) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const downloadLink = document.getElementById('downloadLink');

            // Set the src of the modal image to the clicked image
            modalImage.src = imgElement.src;
            // Set the download link to the image source
            downloadLink.href = imgElement.src;

            // Show the modal
            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            // Hide the modal
            modal.classList.add('hidden');
        }
    </script>


    <script>
        function copyLink() {
            navigator.clipboard.writeText(window.location.href).then(function() {
                var copyIcon = document.getElementById('copyIcon');
                copyIcon.classList.remove('ri-file-copy-2-line');
                copyIcon.classList.add('ri-check-line', 'text-green-500');
                setTimeout(function() {
                    copyIcon.classList.remove('ri-check-line', 'text-green-500');
                    copyIcon.classList.add('ri-file-copy-2-line');
                }, 2000);
            });
        }
    </script>

</x-layout>

<x-layout>
    <x-slot name="title">Order Detail - UMKM Unggulan Desa Karangbendo</x-slot>
    <section class="p-12 w-full bg-gray-100 text-gray-800 min-h-screen flex flex-col" id="hero"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="w-full pt-20">
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-8">Order
                <span class="text-blue-500">Detail</span>
            </h1>
        </div>

        <div class="w-full flex justify-start">
            <div class="w-full md:w-2/3 lg:w-full p-6 bg-white rounded-lg shadow-lg flex flex-col md:flex-row">
                <div class="flex justify-center items-center p-4">
                    <div class="relative w-56 h-56 rounded-md overflow-hidden flex justify-center items-center">
                        <img class="object-cover w-full h-full"
                            src="https://d220hvstrn183r.cloudfront.net/attachment/18577248412538719799.large"
                            alt="">
                    </div>
                </div>

                <div class="hidden md:block border-r-2 border-gray-300"></div>
                <div class="flex-1 p-4 font-medium">
                    <h1 class="text-lg font-bold mb-2">Nama Barang</h1>
                    <table class="table-auto w-full text-left border-collapse">
                        <tbody>
                            <tr>
                                <td class="text-gray-600 font-bold align-top w-1/3 md:w-1/4 lg:w-1/5">Deskripsi Produk
                                </td>
                                <td class="text-gray-600 align-top break-words">: ukuran xl = 1,5 m x 1,5 m x 1,5 m
                                    ukuran m = 1,5 m x 1,5 m x 1,5 m ukuran s = 1,5 m x 1,5 m x 1,5
                                </td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 font-bold align-top w-1/3 md:w-1/4 lg:w-1/5">Harga</td>
                                <td class="text-gray-600 align-top">: Rp. xxx.xxx</td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 font-bold align-top w-1/3 md:w-1/4 lg:w-1/5">Alamat</td>
                                <td class="text-gray-600 align-top">: Jl. xxx</td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 font-bold align-top w-1/3 md:w-1/4 lg:w-1/5">Status</td>
                                <td class="text-emerald-400 align-top">: Tersedia</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="mt-4 flex items-start flex-col gap-2 lg:flex-row">
                        <a href="https://wa.me/yourphonenumber">
                            <button type="button"
                                class="bg-emerald-500 hover:bg-emerald-700 transition-all text-white font-medium py-2 px-4 rounded inline-flex items-center">
                                Hubungi Penjual
                                <i class="ri-whatsapp-line px-2"></i>
                            </button>
                            <a href="https://maps.app.goo.gl/VHdXQiH4uGJe5Z8m7">
                                <button type="button"
                                    class="bg-blue-500 hover:bg-blue-700 transition-all text-white font-medium py-2 px-4 rounded inline-flex items-center">
                                    Lihat Alamat
                                    <i class="ri-road-map-fill px-2"></i>
                                </button>
                            </a>
                        </a>
                    </div>
                    <p class="text-gray-800 font-medium pt-4">Bagikan :</p>

                    <div class="mt-4 flex items-center lg:flex-row space-x-4">

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                            target="_blank" class=" hover:text-blue-800">
                            <i class="ri-facebook-fill text-blue-700"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                            target="_blank" class=" hover:text-blue-600">
                            <i class="ri-twitter-x-fill text-black"></i>
                        </a>
                        <a href="https://whatsapp.com/intent/whatsapp?url={{ urlencode(Request::fullUrl()) }}"
                            target="_blank" class=" hover:text-blue-600">
                            <i class="ri-whatsapp-fill text-emerald-400"></i>
                        </a>
                        <a href="https://instagram.com/intent/instagram?url={{ urlencode(Request::fullUrl()) }}"
                            target="_blank" class="hover:text-blue-600">
                            <i class="ri-instagram-fill text-pink-500"></i>
                        </a>

                        <a href="javascript:void(0)" onclick="copyLink()">
                            <i id="copyIcon" class="ri-file-copy-2-line"></i>

                        </a>

                    </div>
                </div>
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
        function copyLink() {
            let urlToCopy = window.location.href;

            let tempInput = document.createElement('textarea');
            tempInput.value = urlToCopy;
            document.body.appendChild(tempInput);

            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            let copyIcon = document.getElementById('copyIcon');
            copyIcon.classList.remove('ri-file-copy-2-line');
            copyIcon.classList.add('ri-check-line');


            setTimeout(function() {
                copyIcon.classList.remove('ri-check-line');
                copyIcon.classList.add('ri-file-copy-2-line');
                copyButtonText.textContent = 'Salin Link';
            }, 2000);
        }
    </script>

    </section>

</x-layout>

<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form- umkm</title>
    <style>
        #remove-image {
            top: -0.5rem;
            right: -0.5rem;
        }
    </style>

    <!-- Tailwind is included -->
    @include('dashboard.partials.style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script>

</head>

<body>

    <div id="app">

        @include('dashboard.partials.header')

        @include('dashboard.partials.sidebar-umkm')

        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>UMKM</li>
                    <li>Forms</li>
                </ul>
            </div>
        </section>



        <section class="section main-section">
            <div class="card mb-6">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot"></i></span>
                        Upload Product
                    </p>
                </header>
                <div class="card-content">
                    <form class="form">
                        <div class="field">
                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="product-name">
                                    Nama Produk
                                </label>
                                <input id="product-name" type="text" placeholder="Masukkan nama produk"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500" />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="product-price">
                                    Harga
                                </label>
                                <input id="product-price" type="number" placeholder="Masukkan harga produk"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="categoryies" class=" text-gray-800 text-sm font-bold">Pilih
                                Kategori</label>
                            <select id="countries"
                                class="bg-white border  text-gray-800 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2 ">
                                <option selected disabled class="bg-slate-100">Select Category</option>
                                <option class="font-medium">Makanan</option>
                                <option class="font-medium">Batik</option>
                                <option class="font-medium">Fashion</option>
                                <option class="font-medium">kosmetik</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="file-input">
                                Upload Foto
                            </label>
                            <div class="flex items-center">
                                <label
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                    Upload
                                    <input type="file" id="file-input" accept="image/*" class="hidden" />
                                </label>
                            </div>
                        </div>
                        <div class="mb-4 relative w-32">
                            <img id="preview-image" class="hidden w-32 h-32 object-cover rounded-lg shadow-md" />
                            <button id="remove-image"
                                class="hidden absolute top-0 right-0 mt-1 mr-1 bg-red-500 text-white rounded-full w-6 h-6  items-center justify-center">
                                &times;
                            </button>
                        </div>
                        <label for="description" class="block text-gray-800 text-sm font-bold mb-2">Deskripsi
                            Produk</label>
                        <textarea id="description" name="address" placeholder="Masukkan Deskripsi Produk"
                            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                            rows="4" required></textarea>

                        <div class="mb-4">
                            <label for="phone-input" class="block text-gray-800 text-sm font-bold mb-2">Masukkam nomor
                                Whatsapp:</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                        <path
                                            d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                    </svg>
                                </div>
                                <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                                    class="bg-white border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                                    pattern="08[0-9]{8,11}"placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Alamat
                            </label>
                            <textarea id="address" name="address" placeholder="Masukkan alamat"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                rows="4" required></textarea>
                        </div>

                        <hr>

                        <div class="field grouped">
                            <div class="control">
                                <button type="submit"
                                    class="bg-emerald-500 hover:bg-emerald-700 transition-all text-white font-medium py-2 px-4 rounded">
                                    Upload
                                </button>
                            </div>
                            <div class="control">
                                <button type="reset"
                                    class="bg-red-500 hover:bg-red-700 transition-all text-white font-medium py-2 px-4 rounded">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>

        @include('dashboard.partials.footer')

        <div id="sample-modal" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Sample modal</p>
                </header>
                <section class="modal-card-body">
                    <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                    <p>This is sample modal</p>
                </section>
                <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">Cancel</button>
                    <button class="button red --jb-modal-close">Confirm</button>
                </footer>
            </div>
        </div>

        <div id="sample-modal-2" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Sample modal</p>
                </header>
                <section class="modal-card-body">
                    <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                    <p>This is sample modal</p>
                </section>
                <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">Cancel</button>
                    <button class="button blue --jb-modal-close">Confirm</button>
                </footer>
            </div>
        </div>

    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="{{ asset('dist/js/main.min.js?v=1628755089081') }}"></script>
    {{-- script for upload foto --}}
    <script>
        document.getElementById('file-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview-image');
            const removeButton = document.getElementById('remove-image');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    removeButton.classList.remove('hidden');
                }

                reader.readAsDataURL(file);
            }
        });

        document.getElementById('remove-image').addEventListener('click', function() {
            const preview = document.getElementById('preview-image');
            const removeButton = document.getElementById('remove-image');

            preview.src = '';
            preview.classList.add('hidden');
            removeButton.classList.add('hidden');
            document.getElementById('file-input').value = '';
        });
    </script>
    {{-- end of script for upload --}}

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658339141622648');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>

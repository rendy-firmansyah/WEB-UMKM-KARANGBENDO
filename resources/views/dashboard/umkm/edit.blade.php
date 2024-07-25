<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Produk umkm</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <section
        class="bg-gray-100 text-gray-800 min-h-screen"style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Edit product</h2>
            <hr class="border-gray-600 w-full border-2 rounded-full my-2">
            <form action="{{route('formUmkm.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product
                            Name</label>
                        <input type="text" name="nama_produk" id="name"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan nama produk" value={{$produk->nama_produk}}>
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                        <input type="number" name="harga" id="price"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Harga" value={{$produk->harga}}>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500" name="kategori" >
                            <option selected="" disabled>Pilih Kategori</option>
                            <option class="font-medium" {{ $produk->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                            <option class="font-medium" {{ $produk->kategori == 'Fashion' ? 'selected' : '' }}>Fashion</option>
                            <option class="font-medium" {{ $produk->kategori == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                            <option class="font-medium" {{ $produk->kategori == 'Kosmetik' ? 'selected' : '' }}>Kosmetik</option>
                        </select>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                        <select id="category" name="status_produk" class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="" disabled>Status</option>
                            <option class="font-medium" {{ $produk->status_produk == 'Tersedia' ? 'selected' : '' }} >Tersedia</option>
                            <option class="font-medium" {{ $produk->status_produk == 'Tidak Tersedia' ? 'selected' : '' }} >Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="img-berita" class="block mb-2 text-sm font-medium text-gray-900">Upload
                            Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="img-berita"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 border-gray-300 hover:bg-gray-100 transition-all">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="ri-folder-5-fill text-xl md:text-4xl"></i>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF, SVG
                                    </p>
                                </div>
                                <input id="img-berita" type="file" class="hidden" name="gambar"
                                    accept="image/png, image/jpeg, image/gif, image/svg+xml">
                            </label>
                        </div>
                        <div class="mt-4 relative" id="image-preview-container" style="display: none;">
                            <img id="image-preview" class="w-full h-auto rounded-lg" />
                            <button id="remove-image"
                                class="absolute top-2 right-2 bg-red-500 text-white rounded-full px-2 focus:outline-none">
                                &times;
                            </button>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="description" name="deskripsi_produk" placeholder="Masukkan Deskripsi Produk"
                            class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                            rows="4">{{$produk->deskripsi_produk}}</textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white bg-blue-700 transition-all hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 ">
                        Update product
                    </button>
                    <button type="button"
                        class="text-red-600 inline-flex items-center transition-all hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Reset
                    </button>
                </div>
            </form>
            <div class="w-full md:w-1/2 flex justify-start items-center">
                <a href="{{ route('formUmkm.index') }}">
                    <button
                        class="my-4 bg-white shadow-lg hover:bg-slate-100 text-gray-800 text-sm font-medium py-2 px-6 transition-all rounded-lg">kembali
                        ke halaman dashboard</button>
                </a>
            </div>
        </div>

    </section>

    <script>
        document.getElementById('img-berita').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const previewContainer = document.getElementById('image-preview-container');
            const previewImage = document.getElementById('image-preview');
            const removeButton = document.getElementById('remove-image');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }

            removeButton.addEventListener('click', function() {
                previewImage.src = '';
                previewContainer.style.display = 'none';
                document.getElementById('img-berita').value = '';
            });
        });
    </script>
</body>

</html>

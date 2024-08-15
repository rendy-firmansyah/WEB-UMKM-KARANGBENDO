<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Produk umkm</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <section
        class="bg-gray-100 text-gray-800 min-h-screen"style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Edit product</h2>
            <hr class="border-gray-600 w-full border-2 rounded-full my-2">
            <form action="{{ route('formUmkm.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

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
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, JPEG, SVG, GIF
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


                <div class="flex flex-col w-full md:flex-row justify-start gap-0 md:gap-4 mt-4">
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-white bg-blue-700 transition-all hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 ">
                            Update product
                        </button>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-start items-center">
                        <a href="{{ route('formUmkm.index') }}">
                            <button
                                class="my-4 bg-white shadow-lg hover:bg-slate-100 text-gray-800 text-sm font-medium py-2 px-6 transition-all rounded-lg">kembali
                                ke halaman dashboard</button>
                        </a>
                    </div>
                </div>
            </form>


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

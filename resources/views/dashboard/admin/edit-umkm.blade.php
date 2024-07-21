<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Data umkm</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <section
        class="bg-gray-100 text-gray-800 min-h-screen"style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Edit data UMKM</h2>
            <hr class="border-gray-600 w-full border-2 rounded-full my-2">
            <form action="{{route('daftarumkm.update', $umkmUser->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="" class="block mb-2 text-sm text-gray-900 font-medium">Nama
                            UMKM</label>
                        <input type="text" name="nama_umkm" id="nama_umkm"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan nama UMKM" value="{{$umkmUser->nama_umkm}}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="owner" class="block mb-2 text-sm font-medium text-gray-900">Owner</label>
                        <input type="text" name="owner" id="owner"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Pemilik UMKM" value="{{$umkmUser->owner}}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                        <input type="text" name="phone" id="phone"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="08xxxxxxx" pattern="08[0-9]{8,11}" value="{{$umkmUser->nomor_telepon}}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="08xxxxxxx" value="{{$umkmUser->alamat}}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Email UMKM" value="{{$umkmUser->email}}">
                    </div>

                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-white bg-blue-700 transition-all hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 ">
                            Update Data
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
            <div class="w-full">
                <a href="">
                    <button
                        class="my-4 bg-white shadow-lg hover:bg-slate-100 text-gray-800 text-sm font-medium py-2 px-6 transition-all rounded-lg">kembali
                        ke halaman dashboard</button>
                </a>
            </div>
        </div>

    </section>


</body>

</html>

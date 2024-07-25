<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - User Umkm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/logo-icon-umkm.jpeg') }}" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <section class="bg-gray-100 text-gray-800 min-h-screen"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="container mx-auto px-4 py-8 lg:py-16 max-w-2xl">
            <h2 class="mb-4 text-2xl font-bold text-gray-900">Edit data UMKM</h2>
            <hr class="border-gray-600 w-full border-2 rounded-full my-2">
            <form action="{{ route('daftarumkm.update', $umkmUser->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama_umkm" class="block mb-2 text-sm font-medium text-gray-900">Nama UMKM</label>
                        <input type="text" name="nama_umkm" id="nama_umkm"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan nama UMKM" value="{{ $umkmUser->nama_umkm }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="owner" class="block mb-2 text-sm font-medium text-gray-900">Owner</label>
                        <input type="text" name="owner" id="owner"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan Pemilik UMKM" value="{{ $umkmUser->owner }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="phone" inputmode="numeric"
                            class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                        <input type="text" name="nomor_telepon" id="phone"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="08xxxxxxx" pattern="08[0-9]{8,11}" value="{{ $umkmUser->nomor_telepon }}">
                        <p id="phone-error" class="text-red-500 mt-2 hidden">Nomor telepon tidak sesuai format.
                            Harus berupa angka dengan panjang 10-12 digit, dimulai dengan 08.</p>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan Alamat UMKM" value="{{ $umkmUser->alamat }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 font-medium text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan Email UMKM" value="{{ $umkmUser->email }}">
                    </div>

                    <div class="relative sm:col-span-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <div class="relative">
                            <input id="password" type="password" placeholder="Masukkan password pemilik UMKM"
                                class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500 pr-10"
                                name="password" minlength="8" value="{{ $umkmUser->password }}" />
                            <span id="toggle-password"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 cursor-pointer">
                                <i id="eye-icon" class="ri-eye-line"></i>
                            </span>
                        </div>
                        <p id="password-error" class="text-red-500 mt-2 hidden">Password harus terdiri dari minimal 8
                            karakter</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <button type="submit" value="update" name="action"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Update Data
                        </button>
                        <button type="reset"
                            class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
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
            <div class="w-full mt-4">
                <a href="{{ route('daftarumkm.index') }}">
                    <button type="submit" value="back" name="action"
                        class="bg-white shadow-lg hover:bg-slate-100 text-gray-800 text-sm font-medium py-2 px-6 rounded-lg">
                        Kembali ke halaman dashboard
                    </button>
                </a>
            </div>
        </div>
    </section>

    {{-- Script for custom validation error phone --}}
    <script>
        document.getElementById('phone').addEventListener('input', function() {
            const phoneInput = this;
            const phoneError = document.getElementById('phone-error');
            const phonePattern = /^08[0-9]{8,11}$/;

            // Cek jika input berisi karakter non-numerik
            if (/\D/.test(phoneInput.value) && phoneInput.value !== '') {
                phoneInput.setCustomValidity('Nomor harus berupa angka.');
                phoneError.textContent = 'Nomor harus berupa angka, bukan huruf.';
                phoneError.classList.remove('hidden');
            } else if (!phonePattern.test(phoneInput.value)) {
                phoneInput.setCustomValidity(
                    'Nomor telepon tidak sesuai format. Harus berupa angka dengan panjang 10-12 digit, dimulai dengan 08.'
                );
                phoneError.textContent =
                    'Nomor telepon tidak sesuai format. Harus berupa angka dengan panjang 10-12 digit, dimulai dengan 08.';
                phoneError.classList.remove('hidden');
            } else {
                phoneInput.setCustomValidity('');
                phoneError.classList.add('hidden');
            }
        });

        document.querySelector('form').addEventListener('submit', function(e) {
            const phoneInput = document.getElementById('phone');

            if (!phoneInput.checkValidity()) {
                e.preventDefault();
            }
        });
    </script>

    {{-- Script for toggling password visibility --}}
    <script>
        const togglePassword = document.querySelector('#toggle-password');
        const password = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eye-icon');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Change the icon
            if (type === 'password') {
                eyeIcon.classList.remove('ri-eye-off-line');
                eyeIcon.classList.add('ri-eye-line');
            } else {
                eyeIcon.classList.remove('ri-eye-line');
                eyeIcon.classList.add('ri-eye-off-line');
            }
        });
    </script>
</body>

</html>

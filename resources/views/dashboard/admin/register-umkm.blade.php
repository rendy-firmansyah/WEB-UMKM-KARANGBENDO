<!DOCTYPE html>
<html lang="en" class="">

@include('dashboard.partials.head', [
    'title' => 'Form - Users umkm-karangbendo',
    'description' => 'Form Berita',
])

<body>

    <div id="app">

        @include('dashboard.partials.header')

        @include('dashboard.partials.sidebar-berita')

        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>Forms</li>
                </ul>
            </div>
        </section>


        <section class="section main-section">
            <div class="card mb-6">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot"></i></span>
                        register umkm
                    </p>
                </header>
                <div class="card-content">
                    <form class="form" action="{{ route('daftarumkm.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="nama_umkm">
                                    Nama UMKM
                                </label>
                                <input id="nama_umkm" type="text" placeholder="Masukkan nama UMKM"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                    name="nama_umkm" required />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="owner">
                                    Owner
                                </label>
                                <input id="owner" type="text" placeholder="Masukkan nama pemilik UMKM"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                    name="owner" required />
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-sm mb-2 font-bold text-gray-700">Nomor
                                    Telepon</label>
                                <input id="phone" inputmode="numeric" type="text"
                                    placeholder="Masukkan nomor telepon terdaftar"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                    name="nomor_telepon" required />
                                <p id="phone-error" class="text-red-500 mt-2 hidden">Nomor telepon tidak sesuai format.
                                    Harus berupa angka dengan panjang 10-12 digit, dimulai dengan 08.</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="alamat">
                                    Alamat
                                </label>
                                <input id="alamat" type="text" placeholder="Masukkan alamat pemilik UMKM"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                    name="alamat" required />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input id="email" type="email" placeholder="Masukkan email pemilik UMKM"
                                    class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500"
                                    name="email" required />
                            </div>
                            <div class="mb-4 relative">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="password">
                                    Password
                                </label>
                                <div class="relative">
                                    <input id="password" type="password" placeholder="Masukkan password pemilik UMKM"
                                        class="w-full px-3 py-2 text-gray-800 border rounded-lg focus:outline-none focus:shadow-outline focus:border-blue-500 pr-10"
                                        name="password" minlength="8" required />
                                    <span id="toggle-password"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 cursor-pointer">
                                        <i id="eye-icon" class="ri-eye-line"></i>
                                    </span>
                                </div>
                                <p id="password-error" class="text-red-500 mt-2 hidden">Password harus terdiri dari
                                    minimal 8 karakter</p>
                            </div>
                        </div>

                        <hr>
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Submit
                                </button>
                            </div>
                            <div class="control">
                                <button type="reset" class="button red">
                                    Reset
                                </button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>

        </section>
    </div>





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

    <script type="text/javascript" src="{{ asset('dist/js/main.min.js?v=1628755089081') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const datetimeInput = document.getElementById('datetime');
            datetimeInput.addEventListener('click', function() {
                this.showPicker();
            });
        });
    </script>

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
            document.getElementById('file-input').value = ''; // Clear the file input
        });
    </script>

    {{-- script for custom validation error password --}}

    <script>
        const passwordInput = document.getElementById('password');
        const passwordError = document.getElementById('password-error');
        passwordInput.addEventListener('input', function() {
            if (passwordInput.value.length < 8) {
                passwordError.classList.remove('hidden');
            } else {
                passwordError.classList.add('hidden');
            }
        });
    </script>

    {{-- end script for custom validation error password --}}


    {{-- script for custom validation error phone --}}
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

    {{-- end script for custom validation error phone --}}


    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('ri-eye-line');
                eyeIcon.classList.add('ri-eye-off-line');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('ri-eye-off-line');
                eyeIcon.classList.add('ri-eye-line');
            }
        });
    </script>


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

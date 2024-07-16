<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Admin umkm-karangbendo</title>

    <!-- Tailwind is included -->
    @include('dashboard.partials.style')
    <meta name="description" content="Admin UMKM-karangbendo">


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
                    <li>Admin</li>
                    <li>UMKM</li>
                </ul>
            </div>
        </section>

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Dashboard
                </h1>
            </div>
        </section>

        <section class="section main-section">
            <div class="card has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Clients
                    </p>
                    <a href="{{ route('dashboard-umkm') }}" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Alamat</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Status</th>>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg"
                                            class="rounded-full">
                                    </div>
                                </td>
                                <td data-label="Name">Rebecca Bauch</td>
                                <td data-label="Company">Lorem </td>
                                <td data-label="City">Rp. 1.000.000</td>
                                <td data-label="alamat">jln...</td>
                                <td data-label="image">
                                    <img class="max-w-[80px] rounded-md"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                </td>
                                <td data-label="Created">
                                    <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                                </td>

                                <td data-label="Status" class="status-cell">
                                    <span class="status" style="color: rgb(0, 176, 79);">Tersedia</span>
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a href="{{ route('dashboard-umkm-edit') }}">
                                            <button class="button small blue --jb-modal" type="button">
                                                <span class="icon text-white"><i
                                                        class="mdi mdi-square-edit-outline"></i></span>
                                            </button>
                                        </a>
                                        <button class="button small red --jb-modal" data-target="sample-modal"
                                            type="button">
                                            <span class="icon text-white"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        @include('dashboard.partials.footer')

        <div id="sample-modal" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title font-medium text-red-500">Peringatan!</p>
                </header>
                <section class="modal-card-body">
                    <p>Apakah anda yakin untuk <b>Menghapus data ini?</b></p>
                </section>
                <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">tidak</button>
                    <button class="button red --jb-modal-close">iya</button>
                </footer>
            </div>
        </div>

    </div>


    @include('dashboard.partials.script')


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

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

    {{-- <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/"> --}}
    {{-- <meta property="og:site_name" content="umkm-karangbendo">
    <meta property="og:title" content="Admin umkm-karangbendo">
    <meta property="og:description" content="Admin UMKM-karangbendo"> --}}
    {{-- <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png"> --}}
    {{-- <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="960">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Admin umkm-karangbendo">
    <meta property="twitter:description" content="Admin UMKM-karangbendo"> --}}
    {{-- <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png"> --}}
    {{-- <meta property="twitter:image:width" content="1920">
    <meta property="twitter:image:height" content="960"> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
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
            <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
                <div class="card">
                    <div class="card-content">
                        <div class="flex items-center justify-between">
                            <div class="widget-label">
                                <h3>
                                    Clients
                                </h3>
                                <h1>
                                    512
                                </h1>
                            </div>
                            <span class="icon widget-icon text-green-500"><i
                                    class="mdi mdi-account-multiple mdi-48px"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="flex items-center justify-between">
                            <div class="widget-label">
                                <h3>
                                    Product
                                </h3>
                                <h1>
                                    23
                                </h1>
                            </div>
                            <span class="icon widget-icon text-blue-500"><i
                                    class="mdi mdi-cart-outline mdi-48px"></i></span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="flex items-center justify-between">
                            <div class="widget-label">
                                <h3>
                                    sales
                                </h3>
                                <h1>
                                    Rp. 200.000
                                </h1>
                            </div>
                            <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="card mb-6">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-finance"></i></span>
                        Performance
                    </p>
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="chart-area">
                        <div class="h-full">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div></div>
                                </div>
                            </div>
                            <canvas id="big-line-chart" width="2992" height="1000"
                                class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="card has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Clients
                    </p>
                    <a href="#" class="card-header-icon">
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
                                <th>Created At</th>
                                <th>Action</th>>
                                <th>Status</th>
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
                                <td data-label="Company">Daugherty-Daniel</td>
                                <td data-label="City">South Cory</td>
                                <td data-label="Progress" class="progress-cell">
                                    <progress max="100" value="79">79</progress>
                                </td>
                                <td data-label="Created">
                                    <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                                </td>

                                <td data-label="Status" class="status-cell">
                                    <span class="status" style="color: rgb(0, 176, 79);">Tersedia</span>
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <button class="button small green --jb-modal" data-target="sample-modal-2"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </button>
                                        <button class="button small red --jb-modal" data-target="sample-modal"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg"
                                            class="rounded-full">
                                    </div>
                                </td>
                                <td data-label="Name">Felicita Yundt</td>
                                <td data-label="Company">Johns-Weissnat</td>
                                <td data-label="City">East Ariel</td>
                                <td data-label="Progress" class="progress-cell">
                                    <progress max="100" value="67">67</progress>
                                </td>
                                <td data-label="Created">
                                    <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
                                </td>

                                <td data-label="Status" class="status-cell">
                                    <span class="status" style="color: rgb(221, 8, 8);">Tidak Tersedia</span>
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <button class="button small green --jb-modal" data-target="sample-modal-2"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </button>
                                        <button class="button small red --jb-modal" data-target="sample-modal"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="table-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                <button type="button" class="button active">1</button>
                                <button type="button" class="button">2</button>
                                <button type="button" class="button">3</button>
                            </div>
                            <small>Page 1 of 3</small>
                        </div>
                    </div>
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

<!DOCTYPE html>
<html lang="en" class="">

@include('dashboard.partials.head', ['title' => 'Daftar UMKM', 'description' => 'Daftar UMKM'])

<body>
    <div id="app">

        @include('dashboard.partials.header')

        @include('dashboard.partials.sidebar-berita')

        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </section>

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Dashboard List UMKM
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
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Owner</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($userUmkm as $item)          
                                <tr>
                                    <td class="image-cell">
                                        <div class="image">
                                            <img src="{{ asset('images/avatar-admin-berita.png') }}" class="rounded-full">
                                        </div>
                                    </td>
                                    <td data-label="Name">{{$item->nama_umkm}}</td>
                                    <td data-label="Owner">{{$item->owner}}</td>
                                    <td data-label="Phone">{{$item->nomor_telepon}}</td>
                                    <td data-label="email">{{$item->email}}</td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <a href="{{route('daftarumkm.edit', $item->id)}}">
                                                <button class="button small blue --jb-modal" type="button">
                                                    <span class="icon text-white"><i
                                                            class="mdi mdi-square-edit-outline"></i></span>
                                                </button>
                                            </a>
                                            <button class="button small red --jb-modal" data-target="sample-modal"
                                                type="button">
                                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Oops data masih kosong....</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        @include('dashboard.partials.footer')

        @if ($userUmkm->isNotEmpty())            
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
                        <form action="{{route('daftarumkm.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button red --jb-modal-close">iya</button>
                        </form>
                    </footer>
                </div>
            </div>
        @endif

    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>


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

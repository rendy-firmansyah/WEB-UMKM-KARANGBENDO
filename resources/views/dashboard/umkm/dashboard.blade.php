<!DOCTYPE html>
<html lang="en" class="">

@include('dashboard.partials.head', [
    'title' => 'Dashboard - UMKM-karangbendo',
    'description' => 'Pelaku UMKM-karangbendo',
])

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
                                <th>Tanggal Upload</th>
                                <th>Status</th>>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $item)                                
                                <tr>
                                    <td class="image-cell">
                                        <div class="image">
                                            <img src="{{ asset('images/avatar-admin-umkm.png') }}" class="rounded-full">
                                        </div>
                                    </td>
                                    <td data-label="Name">{{$item->nama_produk}}</td>
                                    <td data-label="Company">{{$item->deskripsi_produk}}</td>
                                    <td data-label="City">{{$item->harga}}</td>
                                    <td data-label="alamat">{{$item->alamat}}</td>
                                    <td data-label="Image">
                                        <img class="max-w-24 rounded-md"
                                        src="{{ asset('images/content/' . $item->gambar) }}"
                                        alt="">
                                    </td>
                                    <td data-label="Created">
                                        <small class="text-gray-500" title="Oct 25, 2021">{{ $item->created_at->format('M d, Y') }}</small>
                                    </td>

                                    <td data-label="Status" class="status-cell">
                                        <span class="status" style="color: rgb(0, 176, 79);">{{$item->status_produk}}</span>
                                    </td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <a href="{{route('formUmkm.edit', $item->id)}}">
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
        @if ($produk->isNotEmpty())            
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
                        <form action="{{route('formUmkm.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button red --jb-modal-close">iya</button>
                        </form>
                    </footer>
                </div>
            </div>
        @endif

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

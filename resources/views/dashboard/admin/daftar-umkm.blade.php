<!DOCTYPE html>
<html lang="en">

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
                    <a href="{{ route('daftarumkm.index') }}" class="card-header-icon">
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
                                <th>Address</th>
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
                                            <img src="{{ asset('images/avatar-admin-berita.png') }}"
                                                class="rounded-full">
                                        </div>
                                    </td>
                                    <td data-label="Name">{{ $item->nama_umkm }}</td>
                                    <td data-label="Owner">{{ $item->owner }}</td>
                                    <td data-label="alamat">
                                        <span class="block md:hidden truncate w-20">
                                            {{ $item->alamat }}
                                        </span>
                                        <span class="hidden md:block truncate w-50">
                                            {{ $item->alamat }}
                                        </span>
                                    </td>
                                    <td data-label="Phone">{{ $item->nomor_telepon }}</td>
                                    <td data-label="email">{{ $item->email }}</td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <a href="{{ route('daftarumkm.edit', $item->id) }}">
                                                <button class="button small blue --jb-modal" type="button">
                                                    <span class="icon text-white"><i
                                                            class="mdi mdi-square-edit-outline"></i></span>
                                                </button>
                                            </a>
                                            <button class="button small red --jb-modal" data-target="delete-modal"
                                                data-id="{{ $item->id }}" type="button">
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
            <div id="delete-modal" class="modal">
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
                        <form action="" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" id="delete-id">
                            <button type="submit" class="button red --jb-modal-close">iya</button>
                        </form>
                    </footer>
                </div>
            </div>
        @endif

    </div>

    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    @include('dashboard.partials.script')

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('button[data-target="delete-modal"]');
            const deleteForm = document.getElementById('delete-form');
            const deleteIdInput = document.getElementById('delete-id');

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.getAttribute('data-id');
                    deleteIdInput.value = id;
                    deleteForm.setAttribute('action',
                        `{{ url('admin/dashboard/daftarumkm') }}/${id}`);
                });
            });
        });
    </script>
</body>

</html>

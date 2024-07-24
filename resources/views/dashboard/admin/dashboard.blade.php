<!DOCTYPE html>
<html lang="en" class="">

@include('dashboard.partials.head', [
    'title' => 'Dashboard - Admin umkm-karangbendo',
    'description' => 'Admin UMKM-karangbendo',
])

<body>

    <div id="app">
        @include('dashboard.partials.header')

        @include('dashboard.partials.sidebar-berita')

        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>Berita</li>
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
                        Berita
                    </p>
                    <a href="{{ route('dashboard-admin') }}" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tittle</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Created</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beritaAll as $item)
                                <tr>
                                    <td class="image-cell">
                                        <div class="image">
                                            <img src="{{ asset('images/avatar-admin-berita.png') }}"
                                                class="rounded-full">
                                        </div>
                                    </td>
                                    <td data-label="Tittle">{{ Str::limit($item->judul_berita, 30) }}</td>
                                    <td data-label="content">{{ Str::limit($item->isi_konten, 30) }}</td>
                                    <td data-label="author" class="font-medium">{{ $item->author }}</td>
                                    <td data-label="image">
                                        <img class="max-w-24 rounded-md"
                                            src="{{ asset('images/content/' . $item->gambar_berita) }}" alt="">
                                    </td>
                                    <td class="text-sm text-gray-800 font-medium py-4">
                                        {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('d F Y') }}
                                    </td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <a href="{{ route('form.edit', $item->id) }}">
                                                <button class="button small blue --jb-modal" type="button">
                                                    <span class="icon text-white"><i
                                                            class="mdi mdi-square-edit-outline"></i></span>
                                                </button>
                                            </a>
                                            <button class="button small red --jb-modal" data-target="sample-modal" data-id="{{$item->id}}" type="button">
                                                <span class="icon text-white"><i class="mdi mdi-trash-can"></i></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-red-500">Oops data masih kosong....</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        @include('dashboard.partials.footer')

        @if ($beritaAll->isNotEmpty())
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('sweetalert::alert')
    @include('dashboard.partials.script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('button[data-target="sample-modal"]');
            const deleteForm = document.getElementById('delete-form');
            const deleteIdInput = document.getElementById('delete-id');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.getAttribute('data-id');
                    deleteIdInput.value = id;
                    deleteForm.setAttribute('action', `{{ url('admin/dashboard/form') }}/${id}`);
                });
            });
        });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>

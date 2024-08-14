<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.head', ['title' => 'Profile - umkm', 'description' => 'Profile umkm'])

<body>
    @include('dashboard.partials.header')

    @include('dashboard.partials.sidebar-umkm')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Profile
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        Edit Profile
                    </p>
                </header>
                <div class="card-content">
                    <form action="{{route('profileUmkm.update', ['profileUmkm' => $user->id] )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label">Foto Profile</label>
                            <div class="field-body">
                                {{-- <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue">
                                            Upload
                                        </a>
                                        <input type="file">
                                    </label>
                                </div> --}}
                                <input type="file" name="foto_profile" id="">
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">Store Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" name="nama_umkm" placeholder="berikan toko anda nama...." value={{$user->nama_umkm}}
                                            class="input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Deskription Store</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" autocomplete="on" name="deskripsi_toko"
                                            placeholder="berikan toko anda deskripsi...." value="{{$user->deskripsi_toko ?: 'toko anda masih belum ada deskripsinya nih...'}}" class="input" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account"></i></span>
                        Profile
                    </p>
                </header>
                <div class="card-content">
                    <div class="image w-48 h-48 mx-auto">
                        <img src="{{ $user->foto_profile ? asset('images/content/' . $user->foto_profile) : 'https://avatars.dicebear.com/v2/initials/john-doe.svg' }}" alt="Profile Image" class="rounded-full">
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Store Name</label>
                        <div class="control">
                            <input type="text" readonly value={{$user->nama_umkm}} class="input is-static">
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Deskription Store</label>
                        <div class="control">
                            <input type="text" readonly value="{{$user->deskripsi_toko ?: 'toko anda masih belum ada deskripsinya nih...'}}" class="input is-static">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

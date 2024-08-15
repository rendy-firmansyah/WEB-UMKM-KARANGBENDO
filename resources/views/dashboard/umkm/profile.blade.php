<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.head', ['title' => 'Profile - umkm', 'description' => 'Profile umkm'])

<body>
    @include('dashboard.partials.header')

    @include('dashboard.partials.sidebar-umkm')
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">
                Profile
            </h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Edit Profile Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-4">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Profile
                        </h2>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('profileUmkm.update', ['profileUmkm' => $user->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="foto_profile">
                                    Foto Profile
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="file" name="foto_profile" id="foto_profile">
                            </div>

                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_umkm">
                                    Nama Toko
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" name="nama_umkm" id="nama_umkm"
                                    placeholder="Give your store a name..."
                                    value="{{ old('nama_umkm', $user->nama_umkm) }}">
                            </div>

                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi_toko">
                                    Deskripsi Toko
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" name="deskripsi_toko" id="deskripsi_toko"
                                    placeholder="Describe your store..."
                                    value="{{ $user->deskripsi_toko ?: 'Your store doesn\'t have a description yet...' }}"
                                    required>
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Profile Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-8 flex justify-center">
                        <div class="max-w-fit h-32 rounded-lg overflow-hidden border-4 border-white shadow-inner">
                            <img src="{{ $user->foto_profile ? asset('images/content/' . $user->foto_profile) : 'https://avatars.dicebear.com/v2/initials/john-doe.svg' }}"
                                alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">Nama Toko</h2>
                            <p class="text-gray-600">{{ old('nama_umkm', $user->nama_umkm) }}</p>
                        </div>

                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">Deskripsi Toko</h2>
                            <p class="text-gray-600">
                                {{ $user->deskripsi_toko ?: 'toko anda belum mempunyai deskripsi' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    @include('dashboard.partials.script')
</body>

</html>

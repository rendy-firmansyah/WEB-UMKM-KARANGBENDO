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
                    <form>
                        <div class="field">
                            <label class="label">Foto Profile</label>
                            <div class="field-body">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue">
                                            Upload
                                        </a>
                                        <input type="file">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">Store Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" autocomplete="on" name="name" value="Kerupuk Rahayu"
                                            class="input" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Deskription Store</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="email" autocomplete="on" name="email"
                                            value="Beli Kerupuk Gratis nasi" class="input" required>
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
                        <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe"
                            class="rounded-full">
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Store Name</label>
                        <div class="control">
                            <input type="text" readonly value="Kerupuk Rahayu" class="input is-static">
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Deskription Store</label>
                        <div class="control">
                            <input type="text" readonly value="beli 5 gratis toko" class="input is-static">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

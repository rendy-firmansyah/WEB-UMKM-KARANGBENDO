{{-- <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools">
                <div>
                    Desa <b class="font-black">Karangbendo</b>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label">Data</p>
                <ul class="menu-list">
                    <li class="active">
                        <a href="{{ route('formUmkm.index') }}">
                            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Action</p>
                <ul class="menu-list">
                    <li class="--set-active-forms-html">
                        <a href="{{ route('formUmkm.create') }}">
                            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                            <span class="menu-item-label">Form</span>
                        </a>
                    </li>
                </ul>
            </div>
</aside> --}}
<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Desa <b class="font-black">Karangbendo</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">DATA</p>
        <ul class="menu-list">
            <li class="active">
                <a href="{{ route('formUmkm.index') }}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Action</p>

        <ul class="menu-list">
            <li class="--set-active-forms-html">
                <a href="{{ route('formUmkm.create') }}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Upload</span>
                </a>
            </li>
            <li class="--set-active-forms-html">
                <a href="{{ route('profileUmkm.edit', ['profileUmkm' => Auth::user()->id]) }}">
                    <span class="icon"><i class="mdi mdi-account-box"></i></span>
                    <span class="menu-item-label">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

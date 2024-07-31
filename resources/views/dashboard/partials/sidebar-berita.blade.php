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
                <a href="{{ route('form.index') }}">
                    <span class="icon"><i class="mdi mdi-newspaper-variant"></i></span>
                    <span class="menu-item-label">Dashboard News</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('daftarumkm.index') }}">
                    <span class="icon"><i class="mdi mdi-format-list-text"></i></span>
                    <span class="menu-item-label">Dashboard List UMKM</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Action</p>
        <ul class="menu-list">

            <li class="--set-active-forms-html">
                <a href="{{ route('form.create') }}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Post News</span>
                </a>
            </li>
            <li class="--set-active-forms-html">
                <a href="{{ route('daftarumkm.create') }}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Register UMKM</span>
                </a>
            </li>
        </ul>

    </div>
</aside>

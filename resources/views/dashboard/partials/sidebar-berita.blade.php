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
                <a href="{{ route('dashboard-admin') }}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Action</p>
        <ul class="menu-list">

            <li class="--set-active-forms-html">
                <a href="{{ route('dashboard-form-admin') }}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Form</span>
                </a>
            </li>
            <li class="--set-active-profile-html">
                <a href="{{ route('dashboard-profile-admin') }}">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Profile</span>
                </a>
            </li>


        </ul>

    </div>
</aside>

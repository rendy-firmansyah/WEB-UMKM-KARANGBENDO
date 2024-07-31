        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item mobile-aside-button">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>

            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
                </a>
            </div>
            <div class="navbar-menu" id="navbar-menu">
                <div class="navbar-end">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" title="Log out" class="navbar-item desktop-icon-only cursor-pointer">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log out</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

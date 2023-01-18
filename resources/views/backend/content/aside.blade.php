<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="" class="brand-link">
        <img src="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Webbase Yayasan Diman</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>
        <div class="user-panel">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item menu-open ">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-solid fa-house"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="user-panel">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item menu-open">
                        <router-link to="/admin/data-berita" class="nav-link">
                            <i class="nav-icon fa-solid fa-database"></i>
                            <p>
                                Berita
                            </p>
                        </router-link>
                    </li>
                </ul>
                </ul>
            </nav>
        </div>
        <div class="user-panel">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                            <p>
                                Log Out
                            </p>
                        </a>
                        <form id="logout-form" action="" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</aside>
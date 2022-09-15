<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
                    <span data-feather="book" class="align-text-bottom"></span>
                    Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/cek*') ? 'active' : '' }}" href="/admin/cek">
                    <span data-feather="user-check" class="align-text-bottom"></span>
                    Cek Tiket
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/report') ? 'active' : '' }}" href="/admin/report">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Report
                </a>
            </li>
    </div>
</nav>

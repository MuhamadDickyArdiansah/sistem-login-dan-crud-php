<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('siswa') ? 'active' : '' }}" href="/siswa">
                    <span data-feather="check-square"></span>
                    Daftar Kegiatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('siswa/create') ? 'active' : '' }}" href="/siswa/create">
                    <span data-feather="plus-circle"></span>
                    Tambah Kegiatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts/search/edit') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="edit"></span>
                    Update Kegiatan
                </a>
            </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify=content=between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
        </ul>
        @endcan

    </div>
</nav>
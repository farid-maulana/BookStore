<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#">BookStore</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::segment(1) === 'categories' ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}" class='sidebar-link'>
                        <i class="bi bi-bookmark"></i>
                        <span>Manage Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-journal-bookmark"></i>
                        <span>Manage Buku</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>List User Terdaftar</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bag-check"></i>
                        <span>Pemesanan Buku</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

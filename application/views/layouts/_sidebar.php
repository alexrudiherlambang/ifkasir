<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Submemu Dashboard -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('home') ?>" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Submemu Kasir -->
                <li class="nav-small-cap"><span class="hide-menu">Kasir</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="shopping-cart" class="feather-icon"></i>
                        <span class="hide-menu">Pesan</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="list" class="feather-icon"></i>
                        <span class="hide-menu">List Penjualan</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Submemu Manajemen Inventory -->
                <li class="nav-small-cap"><span class="hide-menu">Manajemen Inventory</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="box" class="feather-icon"></i>
                        <span class="hide-menu">Inventory</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="plus-square" class="feather-icon"></i>
                        <span class="hide-menu">Tambah Stok</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Submemu Pembukuan -->
                <li class="nav-small-cap"><span class="hide-menu">Pembukuan</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="book" class="feather-icon"></i>
                        <span class="hide-menu">Pembukuan</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Submemu Manajemen Karyawan -->
                <li class="nav-small-cap"><span class="hide-menu">Manajemen Karyawan</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">List Karyawan</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="<?= base_url('register') ?>" aria-expanded="false">
                        <i data-feather="user-plus" class="feather-icon"></i>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>
                
                <li class="list-divider"></li>

                <!-- Submemu Extra -->
                <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="github" class="feather-icon"></i>
                        <span class="hide-menu">Repository</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                        <i data-feather="info" class="feather-icon"></i>
                        <span class="hide-menu">About</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/index') ?> ">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <!-- Data Pengguna Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/pengguna'); ?>">
                <i class="bi bi-person"></i>
                <span>Data Pengguna</span>
            </a>
        </li>
        <!-- End Data Pengguna Nav -->

        <!-- Data Penjemputan Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/penjemputan'); ?>">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Penjemputan</span>
            </a>
        </li>
        <!-- End Data Penjemputan Nav -->

        <!-- Data Sampah Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/sampah'); ?>">
                <i class="bi bi-trash3"></i><span>Data Sampah Pengguna</span>
            </a>
        </li>
        <!-- End Data Sampah Pengguna Nav -->

        <!-- Data Poin Pengguna -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/poin'); ?>">
                <i class="bx bx-coin-stack"></i><span>Poin Pengguna</span>
            </a>
        </li>
        <!-- End Data Poin Pengguna Nav -->

        <!-- Logout Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('AdminController/logout'); ?>">
                <i class="bi bi-box-arrow-in-right" style="color: #EB5757;"></i>
                <span style="color: #EB5757;">Logout</span>
            </a>
        </li><!-- End Logout Nav -->

    </ul>

</aside><!-- End Sidebar-->
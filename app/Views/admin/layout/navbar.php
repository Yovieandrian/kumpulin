<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/index') ?> ">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/pengguna'); ?>">
                <i class="bi bi-person"></i>
                <span>Data Pengguna</span>
            </a>
        </li>
        <!-- End Data Pengguna Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/penjemputan'); ?>">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Penjemputan</span>
            </a>
        </li>
        <!-- End Data Penjemputan Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/sampah'); ?>">
                <i class="bi bi-trash3"></i><span>Data Sampah Pengguna</span>
            </a>
        </li>
        <!-- End Data Sampah Pengguna Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('Dashboard/poin'); ?>">
                <i class="bx bx-coin-stack"></i><span>Poin Pengguna</span>
            </a>
        </li>
        <!-- End Data Poin Pengguna Nav -->

        <li class="nav-item">
            <!-- <a class="nav-link collapsed" href="<?= base_url('Dashboard/dataPengguna'); ?>"> -->
            <!-- <i class="bi bi-journal-text"></i><span>Tambah Data Pengguna</span> -->
            </a>
        </li><!-- End Tambah Data Penjemputan Nav -->

        <!-- <li class="nav-item"> -->
        <!-- Untuk Form Tambah Data Pengguna, Akan Diletakkan di Bagian Navbar Data Pengguna, Jadi Tidak Dibuatkan Fitur Sendiri  -->
        <!-- <a class="nav-link collapsed" href="<?= base_url('Dashboard/formulir'); ?>"> -->
        <!-- <i class="bi bi-journal-text"></i><span>Edit Data Penjemputan</span> -->
        <!-- </a> -->
        <!-- </li>End Tambah Data Penjemputan Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('AdminController/logout'); ?>">
                <i class="bi bi-box-arrow-in-right" style="color: #EB5757;"></i>
                <span style="color: #EB5757;">Logout</span>
            </a>
        </li><!-- End Logout Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
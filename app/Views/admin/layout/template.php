<?= session()->get('pesan') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets-admin'); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets-admin'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-admin'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets-admin'); ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets-admin'); ?>/img/logo.png" alt="">
                <span class="d-none d-lg-block">Kumpulin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        End Search Bar

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                End Search Icon

            </ul>
        </nav> -->
        <!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- Include File Navbar  -->
    <?= $this->include('admin/layout/navbar'); ?>

    <!-- Render Halaman/Section Content -->
    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Kumpulin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url('assets-admin'); ?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets-admin'); ?>/js/main.js"></script>

</body>


</html>
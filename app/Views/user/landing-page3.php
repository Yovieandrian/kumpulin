<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page User</title>

    <!-- Favicons -->
    <link href="<?= base_url('assets-user'); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets-user'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-user'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets-user'); ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><img src="<?= base_url('assets-user'); ?>/assets/img/favicon.png" alt="" class="img-fluid"><span> Kumpulin</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Kumpulin</a></li>
                    <li><a class="nav-link scrollto" href="#about">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Panduan Ambil</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Klasifikasi Sampah</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="<?= site_url('Auth/login') ?>">Log-In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Carousel Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(<?= base_url('assets-user'); ?>/assets/img/slide/car2.jpg);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Website Kumpulin</span></h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        Kumpulin adalah website yang bergerak dibidang jasa penjemputan sampah. Website ini dibuat untuk memudahkan masyarakat dalam mengumpulkan sampah.
                                        Masyarakat dapat dengan mudah mengumpulkan sampah, tanpa harus datang ke bank sampah terdekat.
                                        Sampah yang anda kumpulkan, akan diambil langsung ke alamat rumah anda oleh tim Kumpulin.
                                    </p>
                                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Carousel -->

        <!-- ======= Beranda Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Beranda</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                        <img src="<?= base_url('assets-user'); ?>/assets/img/beranda1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 php-email-form">
                        <center>
                            <h3><strong>Form Penjemputan</strong></h3>
                            <p class="fst-italic">
                                Untuk mengakses form penjemputan, silahkan Log-In terlebih dahulu !
                            </p>
                        </center>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Beranda Section -->

        <!-- ======= Panduan Ambil Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Panduan Ambil</h2>
                    <p>Berikut ini adalah panduan pemesanan layanan penjemputan pada Website Kumpulin.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-package"></i></div>
                            <h4 class="title"><a href="">Kumpulkan Sampah</a></h4>
                            <p class="description">Kumpulkan dan pilah sampah sesuai jenis yang telah ditentukan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-mobile-alt"></i></div>
                            <h4 class="title"><a href="">Pesan Layanan</a></h4>
                            <p class="description">Pesan layanan penjemputan pada beranda Website Kumpulin.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-calendar"></i></div>
                            <h4 class="title"><a href="">Atur Jadwal</a></h4>
                            <p class="description">Atur jadwal dan sesi penjemputan sesuai yang anda inginkan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-trip"></i></div>
                            <h4 class="title"><a href="">Penjemputan</a></h4>
                            <p class="description">Tim Kumpulin akan segera mengambil sampah kerumahmu.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row dashboard">
                    <!-- H A R G A   P E R   K I L O -->
                    <!-- Botol Plastik Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card botol-card">
                            <center>
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">Botol Plastik <span>Harga per KG</span></h5>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                        <div class="ps-3 align-items-center">
                                            <h6>2.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </center>

                        </div>
                    </div>
                    <!-- End Botol Plastik Card -->

                    <!-- Karton Kardus Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card karton-card">
                            <center>
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">Karton Kardus <span>Harga per KG</span></h5>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- End Karton Kardus Card -->

                    <!-- Kaleng Aluminium Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card kaleng-card">
                            <center>
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">Karton Kardus <span>Harga per KG</span></h5>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- End Kaleng Aluminium Card -->

                    <!-- Jerigen Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card jerigen-card">
                            <center>
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">Jerigen <span>Harga per KG</span></h5>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2.000</h6>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- End Jerigen Card -->


                </div>

            </div>
        </section>
        <!-- End Panduan Ambil Section -->

        <!-- ======= Quotes Section ======= -->
        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Biru Langitku, Hijau Bumiku </h3>
                    <p> Lingkungan yang terjaga kebersihannya membuat hidup Anda sehat. Lingkungan yang bersih adalah budaya orang yang memiliki pola pikir maju. Belajarlah mencintai alam karena itu sama halnya dengan menjaga milik Tuhan.</p>
                    <!-- <a class="cta-btn" href="#">Call To Action</a> -->
                </div>

            </div>
        </section>
        <!-- End Quotes Section -->

        <!-- ======= Klasifikasi Sampah Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Klasifikasi Sampah</h2>
                    <p>Sampah yang dapat dikumpulkan dibagi menjadi beberapa jenis. Botol plastik, Karton kardus, Kaleng aluminium, dan Jerigen</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Botol plastik</li>
                            <li data-filter=".filter-card">Karton Kardus</li>
                            <li data-filter=".filter-web">Kaleng aluminium</li>
                            <li data-filter=".filter-card1">Jerigen</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/botol-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Contoh Botol A</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kaleng-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Contoh Kaleng A</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/botol-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Botol B</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card1">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/jerigen-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Contoh Jerigen A</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kaleng-11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kaleng B</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/botol-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Botol C</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card1">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/jerigen-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Jerigen B</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kardus-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Contoh Karton A</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kardus-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Karton B</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kaleng-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kaleng C</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/kardus-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Karton C</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card1">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets-user'); ?>/assets/img/portfolio/jerigen-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Jerigen C</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Klasifikasi Sampah Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">

            <div class="container">
                <div class="section-title">
                    <h2>Kontak Kami</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                        <i class="bx bx-map"></i>
                        <h4>Alamat</h4>
                        <p>Desa Sidojangkung,<br>Kec. Menganti, Kab. Gresik</p>
                    </div>
                    <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                        <i class="bx bx-phone"></i>
                        <h4>Telepon Kami</h4>
                        <p>+62 83 804 171 164<br>+62 83 804 171 165</p>
                    </div>
                    <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                        <i class="bx bx-envelope"></i>
                        <h4>E-mail Kami</h4>
                        <p>kumpulin@gmail.com<br>infokumpulin@gmail.com</p>
                    </div>
                    <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                        <i class="bx bx-time-five"></i>
                        <h4>Jam Kerja</h4>
                        <p>Senin - Minggu: 08.00 - 16.30<br>Istirahat: 12.00 - 14.00</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- START - Create dan Read sebelum diedit -->
        <!-- <form method="post" action="<?= base_url('LandingPage/process') ?>">

            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>

            <div class="form-group">
                <label for="subject">Tanggal Pengambilan</label>
                <input type="date" class="form-control" name="tgl_jemput" id="jemput" placeholder="Subject" required>
            </div>
            <br>
            <div class="form-group">
                <label for="subject">Sesi</label>
                <select name="sesi" id="sesi">
                    <option value="Sesi 1: 08.00 - 10.00">Sesi 1: 08.00 - 10.00</option>
                    <option value="Sesi 2: 10.00 - 12.00">Sesi 2: 10.00 - 12.00</option>
                    <option value="Sesi 3: 14.00 - 16.30">Sesi 3: 14.00 - 16.30</option>
                </select>
            </div>
            <br>
            <div class="text-center">
                <button type="submit">Pesan</button>
                <button type="reset">Reset</button>
            </div>
        </form> -->

        <!-- <section class="section">
            <div class="row">

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Pengguna Kumpulin</h5>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal Penjemputan</th>
                                        <th scope="col">Sesi</th>
                                        <th scope="col">Poin Anda</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END - Create dan Read sebelum diedit -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kumpulin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets-user'); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- <script src="<?= base_url('assets-user'); ?>/assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets-user'); ?>/assets/js/main.js"></script>

</body>

</html>
<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content') ?>

<main id="main" class="main">
    <title>Dashboard Admin</title>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard/index') ?> ">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Data Pengguna -->
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Data Pengguna</h5>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahPengguna; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Data Pengguna Card -->

                    <!-- Data Penjemputan -->
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card info-card orders-card">

                            <div class="card-body">
                                <h5 class="card-title">Data Penjemputan</h5>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahPenjemputan; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Data Pengguna Card -->

                    <!-- <h4>-- Statistik Sampah --</h4> -->

                    <!-- H A R G A   P E R   K I L O -->
                    <!-- Botol Plastik Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card botol-card">

                            <div class="card-body">
                                <h5 class="card-title">Botol Plastik <span>Harga per KG</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>2.000</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Botol Plastik Card -->

                    <!-- Karton Kardus Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card karton-card">

                            <div class="card-body">
                                <h5 class="card-title">Karton Kardus <span>Harga per KG</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>2.000</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Karton Kardus Card -->

                    <!-- Kaleng Aluminium Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card kaleng-card">

                            <div class="card-body">
                                <h5 class="card-title">Karton Kardus <span>Harga per KG</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>2.000</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Kaleng Aluminium Card -->

                    <!-- Jerigen Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card jerigen-card">

                            <div class="card-body">
                                <h5 class="card-title">Jerigen <span>Harga per KG</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>2.000</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Jerigen Card -->


                    <!-- T O T A L   B E R A T-->
                    <!-- Botol Plastik Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card botol-card">

                            <div class="card-body">
                                <h5 class="card-title">Botol Plastik</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahBotol; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Botol Plastik Card -->

                    <!-- Karton Kardus Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card karton-card">

                            <div class="card-body">
                                <h5 class="card-title">Karton Kardus</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahKarton; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Karton Kardus Card -->

                    <!-- Kaleng Aluminium Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card kaleng-card">

                            <div class="card-body">
                                <h5 class="card-title">Karton Kardus</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahKaleng; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Kaleng Aluminium Card -->

                    <!-- Jerigen Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card jerigen-card">

                            <div class="card-body">
                                <h5 class="card-title">Jerigen</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jumlahJerigen; ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Jerigen Card -->

                    <!-- Diagram Sampah -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Diagram Total Sampah Daur Ulang</h5>
                                    <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                                tooltip: {
                                                    trigger: 'item'
                                                },
                                                legend: {
                                                    top: '5%',
                                                    left: 'center'
                                                },
                                                series: [{
                                                    name: 'Access From',
                                                    type: 'pie',
                                                    radius: ['40%', '70%'],
                                                    avoidLabelOverlap: false,
                                                    label: {
                                                        show: false,
                                                        position: 'center'
                                                    },
                                                    emphasis: {
                                                        label: {
                                                            show: true,
                                                            fontSize: '18',
                                                            fontWeight: 'bold'
                                                        }
                                                    },
                                                    labelLine: {
                                                        show: false
                                                    },
                                                    data: [{
                                                            value: <?= $jumlahBotol; ?>,
                                                            name: 'Jumlah Botol'
                                                        },
                                                        {
                                                            value: <?= $jumlahKarton; ?>,
                                                            name: 'Jumlah Karton'
                                                        },
                                                        {
                                                            value: <?= $jumlahKaleng; ?>,
                                                            name: 'Jumlah Kaleng'
                                                        },
                                                        {
                                                            value: <?= $jumlahJerigen; ?>,
                                                            name: 'Jumlah Jerigen'
                                                        },
                                                    ]
                                                }]
                                            });
                                        });
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Diagram Sampah -->

                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection() ?>
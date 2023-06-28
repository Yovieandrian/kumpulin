<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Data Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tambah Data</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="<?= base_url('/dashboard/save'); ?>" id="datauser">
                            <div class="col-12">
                                <label class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" placeholder="" name="username" id="username" value="<?= set_value('username') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="" name="email" id="email" value="<?= set_value('email') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">No. Telp</label>
                                <input type="number" class="form-control" placeholder="" name="no_telp" id="no_telp" value="<?= set_value('no_telp') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'no_telp') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="" name="password" id="password" value="<?= set_value('password') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Ulangi Password</label>
                                <input type="password" class="form-control" placeholder="" name="pass_confirm" id="pass_confirm" value="<?= set_value('pass_confirm') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pass_confirm') : '' ?></span>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection() ?>
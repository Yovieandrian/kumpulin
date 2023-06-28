<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Data Penjemputan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Data Penjemputan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data Data</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="<?= base_url('Dashboard/process') ?>">
                            <div class="col-12">
                                <label class="form-label">Nama Penguna</label>
                                <input type="text" class="form-control" placeholder="" name="username" id="username" value="<?= $data->username ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value="<?= $data->alamat ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Tanggal Penjemputan</label>
                                <input type="date" class="form-control" placeholder="" name="tgl_jemput" id="tgl_jemput" value="<?= date($data->tgl_jemput) ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'tgl_jemput') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Sesi</label>
                                <select class="form-control" placeholder="" name="sesi" id="sesi" value="<?= $data->sesi ?>">
                                    <option value="Sesi 1: 08.00 - 10.00" <?= $data->sesi === 'Sesi 1: 08.00 - 10.00' ? 'selected' : '' ?>>Sesi 1: 08.00 - 10.00</option>
                                    <option value="Sesi 2: 10.00 - 12.00" <?= $data->sesi === 'Sesi 2: 10.00 - 12.00' ? 'selected' : '' ?>>Sesi 2: 10.00 - 12.00</option>
                                    <option value="Sesi 3: 14.00 - 16.30" <?= $data->sesi === 'Sesi 3: 14.00 - 16.30' ? 'selected' : '' ?>>Sesi 3: 14.00 - 16.30</option>
                                </select>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'sesi') : '' ?></span>
                            </div>
                            <!-- <div class="col-12">
                                <label class="form-label">Jenis</label>
                                <select class="form-control" placeholder="" name="jenis" id="jenis" value="">
                                    <option value="Botol Plastik" >Botol Plastik</option>
                                    <option value="Karton Kardus" >Karton Kardus</option>
                                    <option value="Kaleng Aluminium" >Kaleng Aluminium</option>
                                    <option value="Jerigen" >Jerigen</option>
                                </select>
                                <span class="text-danger"></span>
                            </div> -->
                            <div class="col-3">
                                <label class="form-label">Botol Plastik</label>
                                <input type="number" class="form-control" placeholder="" name="botol" id="botol" value="<?= $data->botol ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'botol') : '' ?></span>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Karton Kardus</label>
                                <input type="number" class="form-control" placeholder="" name="karton" id="karton" value="<?= $data->karton ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'karton') : '' ?></span>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Kaleng Aluminium</label>
                                <input type="number" class="form-control" placeholder="" name="kaleng" id="kaleng" value="<?= $data->kaleng ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'kaleng') : '' ?></span>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Jerigen</label>
                                <input type="number" class="form-control" placeholder="" name="jerigen" id="jerigen" value="<?= $data->jerigen ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'jerigen') : '' ?></span>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Poin</label>
                                <input type="text" class="form-control" placeholder="" name="poin" id="poin" value="<?= $data->poin ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'poin') : '' ?></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <select class="form-control" placeholder="" name="status" id="status" value="<?= $data->status ?>">
                                    <option value="Diproses" <?= $data->status === 'Diproses' ? 'selected' : '' ?>>Diproses</option>
                                    <option value="Telah diambil" <?= $data->status === 'Telah diambil' ? 'selected' : '' ?>>Telah diambil</option>
                                    <option value="Poin ditukar" <?= $data->status === 'Poin ditukar' ? 'selected' : '' ?>>Poin ditukar</option>
                                    <option value="Ditolak, Ajukan dengan tanggal/sesi berbeda" <?= $data->status === 'Ditolak, Ajukan dengan tanggal/sesi berbeda' ? 'selected' : '' ?>>Ditolak, Ajukan dengan tanggal/sesi berbeda</option>
                                </select>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'status') : '' ?></span>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        <!-- Vertical Form -->

                    </div>
                </div>
            </div>

    </section>
</main>

<?= $this->endSection() ?>
<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Penjemputan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <!-- <li class="breadcrumb-item">Tables</li> -->
                <li class="breadcrumb-item active">Data Penjemputan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body table-responsive">
                        <h5 class="card-title">Data Penjemputan Sampah</h5>



                        <!-- Default Table -->
                        <table class="datatable" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tgl. Penjemputan</th>
                                    <th scope="col">Sesi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Poin</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;

                                foreach ($data as $d) {
                                    // var_dump($d) 
                                ?>

                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $d['username']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['tgl_jemput']; ?></td>
                                        <td><?= $d['sesi']; ?></td>
                                        <td><?= $d['status']; ?></td>
                                        <td><i class='bx bx-coin-stack' style="color: gold;"></i><?= $d['poin']; ?></td>
                                        <td>
                                            <!-- <a href="<?= base_url('Dashboard/formulir/' . $d['id_jemput']); ?>">Edit</a> -->



                                            <!-- Modal Detail-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $d['id_jemput'] ?>">Detail</button>
                                            <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button> -->

                                            <div class="modal fade" id="modalDetail<?= $d['id_jemput'] ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalDetailLabel">Detail Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td>Nama Pengguna</td>
                                                                    <td>: <?= $d['username'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>: <?= $d['alamat'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Penjemputan</td>
                                                                    <td>: <?= $d['tgl_jemput'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sesi</td>
                                                                    <td>: <?= $d['sesi'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-- Berat Sampah --</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Botol Plastik</td>
                                                                    <td>: <?= $d['botol'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Karton Kardus</td>
                                                                    <td>: <?= $d['karton'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kaleng Aluminium</td>
                                                                    <td>: <?= $d['kaleng'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jerigen</td>
                                                                    <td>: <?= $d['jerigen'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Poin</td>
                                                                    <td>: <?= $d['poin'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>: <?= $d['status'] ?></td>
                                                                </tr>
                                                            </table>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['id_jemput'] ?>">Edit</button>
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal Detail END-->

                                            <!-- Modal Edit -->
                                            <form class="row g-3" method="post" action="<?= base_url('Dashboard/update') ?>">
                                                <div class="modal fade" id="modalEdit<?= $d['id_jemput'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalEditLabel">Edit Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" class="form-control" placeholder="" name="id_user" id="id_user" value="<?= $d['id_user'] ?>">
                                                                <input type="hidden" class="form-control" placeholder="" name="id_jemput" id="id_jemput" value="<?= $d['id_jemput'] ?>">
                                                                <div class="col-12">
                                                                    <label class="form-label">Nama Penguna</label>
                                                                    <input type="text" class="form-control" placeholder="" name="username" id="username" value="<?= $d['username'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Alamat</label>
                                                                    <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value="<?= $d['alamat'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Tanggal Penjemputan</label>
                                                                    <input type="date" class="form-control" placeholder="" name="tgl_jemput" id="tgl_jemput" value="<?= date($d['tgl_jemput']) ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'tgl_jemput') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Sesi</label>
                                                                    <select class="form-control" placeholder="" name="sesi" id="sesi" value="<?= $d['sesi'] ?>">
                                                                        <option value="Sesi 1: 08.00 - 10.00" <?= $d['sesi'] === 'Sesi 1: 08.00 - 10.00' ? 'selected' : '' ?>>Sesi 1: 08.00 - 10.00</option>
                                                                        <option value="Sesi 2: 10.00 - 12.00" <?= $d['sesi'] === 'Sesi 2: 10.00 - 12.00' ? 'selected' : '' ?>>Sesi 2: 10.00 - 12.00</option>
                                                                        <option value="Sesi 3: 14.00 - 16.30" <?= $d['sesi'] === 'Sesi 3: 14.00 - 16.30' ? 'selected' : '' ?>>Sesi 3: 14.00 - 16.30</option>
                                                                    </select>
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'sesi') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Botol Plastik *Kg</label>
                                                                    <input type="number" min="0" class="form-control" onchange="updatePoin(<?= $d['id_jemput'] ?>)" placeholder="" name="botol" id="botol-<?= $d['id_jemput'] ?>" value="<?= $d['botol'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'botol') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Karton Kardus *Kg</label>
                                                                    <input type="number" min="0" class="form-control" onchange="updatePoin(<?= $d['id_jemput'] ?>)" placeholder="" name="karton" id="karton-<?= $d['id_jemput'] ?>" value="<?= $d['karton'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'karton') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Kaleng Aluminium *Kg</label>
                                                                    <input type="number" min="0" class="form-control" onchange="updatePoin(<?= $d['id_jemput'] ?>)" placeholder="" name="kaleng" id="kaleng-<?= $d['id_jemput'] ?>" value="<?= $d['kaleng'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'kaleng') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Jerigen *Kg</label>
                                                                    <input type="number" min="0" class="form-control" onchange="updatePoin(<?= $d['id_jemput'] ?>)" placeholder="" name="jerigen" id="jerigen-<?= $d['id_jemput'] ?>" value="<?= $d['jerigen'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'jerigen') : '' ?></span>
                                                                </div>

                                                                <div class="col-12">
                                                                    <label class="form-label">Poin</label>
                                                                    <input type="number" readonly class="form-control" placeholder="" name="poin" id="poin-<?= $d['id_jemput'] ?>" value="<?= $d['poin'] ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'poin') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Status</label>
                                                                    <select class="form-control" placeholder="" name="status" id="status" value="<?= $d['status'] ?>">
                                                                        <option value="Diproses" <?= $d['status'] === 'Diproses' ? 'selected' : '' ?>>Diproses</option>
                                                                        <option value="Telah diambil" <?= $d['status'] === 'Telah diambil' ? 'selected' : '' ?>>Telah diambil</option>
                                                                        <option value="Poin ditukar" <?= $d['status'] === 'Poin ditukar' ? 'selected' : '' ?>>Poin ditukar</option>
                                                                        <option value="Ditolak, Ajukan dengan tanggal/sesi berbeda" <?= $d['status'] === 'Ditolak, Ajukan dengan tanggal/sesi berbeda' ? 'selected' : '' ?>>Ditolak, Ajukan dengan tanggal/sesi berbeda</option>
                                                                    </select>
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'status') : '' ?></span>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $d['id_jemput'] ?>">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Modal Edit END -->

                                        </td>
                                    </tr>
                            </tbody>
                    </div>
                    </td>
                    </tr>

                <?php } ?>

                </tbody>
                </table>
                <!-- End Default Table Example -->

                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script>
            <?php if (session()->getFlashdata('success') !== NULL) { ?>
                console.log('success');
                alert("<?= session()->getFlashdata('success'); ?>")
            <?php } else if (session()->getFlashdata('fail') !== NULL) { ?>
                console.log('fail');
                alert("<?= session()->getFlashdata('fail'); ?>")
            <?php } ?>

            function updatePoin(id) {
                const botol = document.querySelector(`#botol-${id}`)
                const karton = document.querySelector(`#karton-${id}`)
                const kaleng = document.querySelector(`#kaleng-${id}`)
                const jerigen = document.querySelector(`#jerigen-${id}`)
                const poin = document.querySelector(`#poin-${id}`)

                poin.value = (botol.value * 2000) + (karton.value * 2000) + (kaleng.value * 2000) + (jerigen.value * 2000)
            }
        </script>

    </section>
</main>

<?= $this->endSection() ?>
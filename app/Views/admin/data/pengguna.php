<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<main id="main" class="main">
    <title>Data Pengguna</title>

    <div class="pagetitle">
        <h1>Data Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard/index') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success" style="font-style: italic; color:black;"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>

    <section class="section">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h5 class="card-title">Data Pengguna Kumpulin</h5>

                        <button type="button" class="btn btn-primary mb-4" onclick="location.href='<?= site_url('Dashboard/dataPengguna') ?>'">Tambah Data</button>

                        <!-- Default Table -->
                        <table id="datatable" class="datatable mt-2" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col" class="align-items-center justify-content-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $user) {
                                    // var_dump($user);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <!-- <td><?php echo $user['id_user']; ?></td> -->
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['no_telp']; ?></td>
                                        <td><?php echo $user['alamat']; ?></td>
                                        <!-- <td scope="col">Edit | Delete</td> -->
                                        <td class="align-items-center justify-content-center">

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail<?php echo $user['id_user']; ?>">Detail</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $user['id_user']; ?>">Hapus</button>

                                            <!-- Modal Detail-->
                                            <div class="modal fade" id="modalDetail<?php echo $user['id_user']; ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalDetailLabel">Detail Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td>No.</td>
                                                                    <td>: <?php echo $user['id_user']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama Pengguna</td>
                                                                    <td>: <?php echo $user['username']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>: <?php echo $user['email']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. Telp</td>
                                                                    <td>: <?php echo $user['no_telp']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>: <?php echo $user['alamat']; ?></td>
                                                                </tr>

                                                            </table>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $user['id_user']; ?>">Edit</button>
                                                                <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" ata-bs-target="#deleteModal">Hapus</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Detail END-->

                                            <!-- Modal Edit -->
                                            <form class="row g-3" method="post" action="<?= base_url('/Dashboard/updatePengguna'); ?>" id="datauser">
                                                <div class="modal fade" id="modalEdit<?php echo $user['id_user']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalEditLabel">Tambah Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" class="form-control" placeholder="" name="id_user" id="id_user" value="<?php echo $user['id_user']; ?>">
                                                                <!-- <input type="hidden" class="form-control" placeholder="" name="id_jemput" id="id_jemput" value=""> -->
                                                                <div class="col-12">
                                                                    <label class="form-label">Nama Penguna</label>
                                                                    <!-- <input type="text" class="form-control" placeholder="" name="username" id="username" value=""> -->
                                                                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?php echo $user['username']; ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Email</label>
                                                                    <!-- <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value=""> -->
                                                                    <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" value="<?php echo $user['email']; ?>">
                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">No. Telp</label>
                                                                    <!-- <input type="date" class="form-control" placeholder="" name="tgl_jemput" id="tgl_jemput" value=""> -->
                                                                    <input type="text" class="form-control" placeholder="No. Telp" name="no_telp" id="no_telp" value="<?php echo $user['no_telp']; ?>">

                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'no_telp') : '' ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Alamat</label>
                                                                    <!-- <input type="number" class="form-control" placeholder="" name="botol" id="botol" value=""> -->
                                                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" value="<?php echo $user['alamat']; ?>">

                                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetail">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Modal Edit END -->

                                            <!-- Modal Delete -->
                                            <div class="modal fade" id="deleteModal<?php echo $user['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                                                        </div>
                                                        <form action="/Dashboard/delete/<?php echo $user['id_user']; ?>" method="post">
                                                            <div class="modal-body">
                                                                <!-- <input type="hidden" class="form-control" placeholder="" name="id_jemput" id="<?php echo $user['id_user']; ?>" value="<?php echo $user['id_user']; ?>"> -->
                                                                <p>Apakah anda yakin ingin menghapus data pengguna ini?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-danger" id="confirmDelete">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <form class="row g-3" method="post" action="<?= base_url('/Dashboard/updatePengguna'); ?>" id="datauser">
                <div class="modal fade" id="modalEdit<?php echo $user['id_user']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" class="form-control" placeholder="" name="id_user" id="id_user" value="<?php echo $user['id_user']; ?>">
                                <!-- <input type="hidden" class="form-control" placeholder="" name="id_jemput" id="id_jemput" value=""> -->
                                <div class="col-12">
                                    <label class="form-label">Nama Penguna</label>
                                    <!-- <input type="text" class="form-control" placeholder="" name="username" id="username" value=""> -->
                                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?= set_value('username') ?>">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <!-- <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value=""> -->
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" value="<?= set_value('email') ?>">

                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">No. Telp</label>
                                    <!-- <input type="date" class="form-control" placeholder="" name="tgl_jemput" id="tgl_jemput" value=""> -->
                                    <input type="text" class="form-control" placeholder="No. Telp" name="no_telp" id="no_telp" value="<?= set_value('no_telp') ?>">

                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'no_telp') : '' ?></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Alamat</label>
                                    <!-- <input type="number" class="form-control" placeholder="" name="botol" id="botol" value=""> -->
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">

                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <!-- <input type="number" class="form-control" placeholder="" name="karton" id="karton" value=""> -->
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?= set_value('password') ?>" autocomplete="off">

                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ulangi Password</label>
                                    <!-- <input type="number" class="form-control" placeholder="" name="kaleng" id="kaleng" value=""> -->
                                    <input type="password" class="form-control" placeholder="Ulangi Password" name="pass_confirm" id="password" value="<?= set_value('pass_confirm') ?>" autocomplete="off">

                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pass_confirm') : '' ?></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetail">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Modal Edit END -->
        </div>
    </section>
</main>

<?= $this->endSection() ?>
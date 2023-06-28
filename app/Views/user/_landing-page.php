<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page User</title>
</head>

<body>

    <h3><strong>Form Penjemputan</strong></h3>
    <p>
        Tentukan tanggal dan sesi yang anda inginkan pada form berikut.
    </p>

    <form method="post" action="<?= base_url('LandingPage/process') ?>">

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
    </form>

    <section class="section">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pengguna Kumpulin</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">No. User</th> -->
                                    <!-- No. User adalah id_user -->
                                    <th scope="col">No.</th>
                                    <!-- No. adalah id_jemput -->
                                    <th scope="col">Tanggal Penjemputan</th>
                                    <th scope="col">Sesi</th>
                                    <th scope="col">Poin Anda</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;

                                foreach ($data as $d) { ?>

                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $d['tgl_jemput']; ?></td>
                                        <td><?= $d['sesi']; ?></td>
                                        <td><i class='bx bx-coin-stack'></i><?= $d['poin']; ?></td>
                                        <td><?= $d['status']; ?></td>
                                        <td scope="col">Detail</td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <a href="<?= site_url('Auth/logout'); ?>">Log-Out</a>

</body>

</html>
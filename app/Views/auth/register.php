<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="<?php echo base_url('assets-login'); ?>/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets-login/style.css') ?>" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="box">
        <div class="container">
            <div>
                <header>Register Pengguna</header>
                <hr><br>
            </div>

            <form method="post" action="<?= base_url('auth/save'); ?>">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'username') : '' ?></div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'email') : '' ?></div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'no_telp') : '' ?></div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'password') : '' ?></div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?= isset($validation) ? display_error($validation, 'pass_confirm') : '' ?></div>


                <div class="input-field">
                    <input type="text" class="input " placeholder="Nama Pengguna" name="username" id="username" value="<?= set_value('username') ?>">
                    <i class='bx bx-user'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="email" class="input " placeholder="E-mail" name="email" id="email" value="<?= set_value('email') ?>">
                    <i class='bx bx-envelope'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="text" class="input " placeholder="No. Telp" name="no_telp" id="no_telp" value="<?= set_value('no_telp') ?>">
                    <i class='bx bx-phone'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'no_telp') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="text" class="input " placeholder="Alamat" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
                    <i class='bx bx-map-pin'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="password" class="input " placeholder="Password" name="password" id="password" value="<?= set_value('password') ?>" autocomplete="off">
                    <i class='bx bx-lock-alt'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="password" class="input " placeholder="Ulangi Password" name="pass_confirm" id="password" value="<?= set_value('pass_confirm') ?>" autocomplete="off">
                    <i class='bx bx-lock'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pass_confirm') : '' ?></span> -->
                </div>

                <button class="register" type="submit">Buat Akun</button>
            </form>
            <div class="bottom">
                <span>Sudah punya akun? Masuk sekarang</span>
            </div>
            <div class="input-field">
                <button class="submit" onclick="location.href='<?= site_url('Auth/login') ?>'">Masuk Sekarang</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Swal.fire({
        //     // icon: 'success',
        //     title: 'Gagal!',
        //     text: 'Something went wrong!',
        // })

        // <?php if (session()->getFlashdata('swal_icon')) { ?>
        //     Swal.fire({
        //         title: '<? echo session()->getFlashdata('swal_icon') ?>',
        //         text: '<? echo session()->getFlashdata('swal_title') ?>',
        //     })
        // <?php } ?>
    </script>

</body>

</html>
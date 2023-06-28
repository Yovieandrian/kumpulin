<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="<?php echo base_url('assets-login'); ?>/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets-login/style.css') ?>" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="box">
        <div class="container">
            <img class="close-btn" onclick="location.href='<?= base_url('/') ?>'" src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            <div class="top-header">
                <header>Log-In Pengguna</header>
                <hr><br>
            </div>

            <form method="post" action="<?= base_url('auth/check'); ?>">
                <center>
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger" style="font-style: italic; color:antiquewhite;"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success" style="font-style: italic; color:antiquewhite;"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'username') : '' ?></div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'password') : '' ?></div>
                </center>
                <br>
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" id="username" value="<?= set_value('username') ?>">
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" id="password" value="<?= set_value('password') ?>">
                    <i class='bx bx-lock-alt'></i>
                    <!-- <span><?= isset($validation) ? display_error($validation, 'password') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <button class="submit">Login</button>
                </div>
            </form>
            <div class="bottom">
                <span>Belum punya akun? Daftarkan sekarang</span>
            </div>
            <div class="input-field">
                <button class="register" onclick="location.href='<?= site_url('Auth/register') ?>'">Daftarkan Akun</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Swal.fire({
        //     icon: 'success',
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
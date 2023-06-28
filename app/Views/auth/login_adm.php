<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas</title>

    <link href="<?php echo base_url('assets-login'); ?>/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets-login/style.css') ?>" />
    <!-- <link rel="stylesheet" href="<?= base_url('sweetalert/js/sweetalert2.css') ?>"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="box">
        <div class="container">
            <img class="close-btn" onclick="location.href='<?= base_url('/') ?>'" src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            <div class="top-header">
                <header>Log-In Petugas</header>
                <hr><br>
            </div>

            <form method="post" action="<?= base_url('AdminController/check'); ?>" id="formlogin">
                <center>
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger" style="font-style: italic; color:antiquewhite;"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-danger" style="font-style: italic; color:antiquewhite;"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'username_adm') : '' ?></div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'password') : '' ?></div>
                </center>
                <br>
                <div class="input-field">
                    <input type="text" class="input" placeholder="Nama Petugas" name="username_adm" id="username" value="<?= set_value('username_adm') ?>">
                    <i class='bx bx-user'></i>
                    <!-- <span><?= isset($validation) ? display_error($validation, 'username_adm') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" id="password" value="<?= set_value('password') ?>">
                    <i class='bx bx-lock-alt'></i>
                    <!-- <span><?= isset($validation) ? display_error($validation, 'password') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <button class="submit" id="login">Login</button>
                </div>
            </form>
            <div class="bottom">
                <span>Belum punya akun? Daftarkan sekarang</span>
            </div>
            <div class="input-field">
                <button class="register" onclick="location.href='<?= site_url('AdminController/register') ?>'">Daftarkan Akun</button>
            </div>
        </div>
    </div>
</body>

<!-- <script src="<?= base_url('sweetalert/js/sweetalert2.all.min.js') ?>"></script> -->
<!-- <script>
    $('#login').click(function(e) {
        e.preventDefault();
        var dataform = $('#formlogin')[0];
        var dataform = new formData(dataform);

        var username = $('#username')

        if (username == "") {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Nama Pengguna harus diisi'
            })
        }
    })


    const flashData = $('flash-data').data('flashdata');

    if (flashData) {
        Swal({
            title: 'Berhasil!' + flashData,
            text: '',
            type: 'success'
        });
    }
</script> -->

</html>
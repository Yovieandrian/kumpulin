<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Petugas</title>

    <link href="<?php echo base_url('assets-login'); ?>/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets-login/style.css') ?>" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Sweet Alert -->
    <!-- <link type="text/css" href="<?= base_url('sweetalert/js/sweetalert2.css') ?>"> -->
    <!-- <script type="text/javascript" src="<?= base_url('sweetalert/js/sweetalert2.js') ?>"></script> -->
</head>

<body>
    <div class="box">
        <div class="container">
            <div>
                <header>Register Petugas</header>
                <hr><br>
            </div>

            <form id="form" method="post" action="<?= base_url('AdminController/save'); ?>">
                <center>
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger" style="font-style: italic; color:antiquewhite;"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'username_adm') : '' ?></div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'email_adm') : '' ?></div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'password') : '' ?></div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-style: italic; color:antiquewhite;"><?= isset($validation) ? display_error($validation, 'pass_confirm') : '' ?></div>
                </center>
                <br>
                <div class="input-field">
                    <input type="text" class="input " placeholder="Nama Petugas" name="username_adm" id="username_adm" value="<?= set_value('username_adm') ?>">
                    <i class='bx bx-user'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username_adm') : '' ?></span> -->
                </div>
                <div class="input-field">
                    <input type="email" class="input " placeholder="E-mail" name="email_adm" id="email_adm" value="<?= set_value('email_adm') ?>">
                    <i class='bx bx-envelope'></i>
                    <!-- <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email_adm') : '' ?></span> -->
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

                <button class="register" id="buat-akun" type="submit">Buat Akun</button>
            </form>
            <div class="bottom">
                <span>Sudah punya akun? Masuk sekarang</span>
            </div>
            <div class="input-field">
                <button class="submit" onclick="location.href='<?= site_url('AdminController/login') ?>'">Masuk Sekarang</button>
            </div>
        </div>
    </div>

    <!-- <script>
        $(document).ready(function() {
            $('#buat-akun').click(function(e) {
                e.preventDefault();
                var dataForm = $('#form')[0];
                var data = new FormData(dataform);

                var username_adm = $('#username_adm').val();
                var email_adm = $('#email_adm').val();
                var password = $('#password').val();
                var pass_confirm = $('#pass_confirm').val();

                if (username_adm == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Nama Petugas belum diisi !'
                    })
                } else if (email_adm == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Email belum diisi !'
                    })
                } else if (password == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Password belum diisi !'
                    })
                } else if (kls_petembak == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Ulangi Password belum diisi !'
                    })
                } else {
                    $.ajax({
                        url: '/Controllers/AdminController.php',
                        type: 'POST',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(hasil) {
                            //sukses
                            if (hasil == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil...',
                                    text: 'Data telah tersimpan !'
                                }).then(function() {
                                    location.reload();
                                });

                            } else if (hasil == 2) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal...',
                                    text: 'Data size foto terlalu kecil !'
                                });
                            } else if (hasil == 3) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal...',
                                    text: 'Data size foto terlalu besar !'
                                });
                            }

                        }

                    });
                }
            })
        })
    </script> -->
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulin</title>

    <link href="<?php echo base_url('assets-login'); ?>/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets-login/style.css') ?>" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <center>
                    <header>Selamat Datang di Website Kumpulin</header>
                    <p> Silahkan login sebagai:</p>
                </center>
            </div>

            <div class="input-field">
                <button class="register" onclick="location.href='<?= site_url('Auth/login') ?>'">Sebagai Pengguna</button>
            </div>
            <br>
            <div class="input-field">
                <button class="submit" onclick="location.href='<?= site_url('AdminController/login') ?>'">Sebagai Petugas</button>
            </div>
        </div>
    </div>
</body>

</html>
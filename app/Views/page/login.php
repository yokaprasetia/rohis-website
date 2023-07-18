<?php

if (isset($_SESSION['logged_in'])) {
    echo "
    <script>
    document.location = 'beranda';
    </script>
    ";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiROHIS | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/adminlte.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/dist/img/logo-rohis.png" type="image/x-icon">
    <style>
        body {
            background-image: url(img/background.png);
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .bagian-luar {
            background-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0px 0px 5px #000000;
        }
    </style>
</head>

<body class="hold-transition login-page">

    <!-- SWEET ALERT -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div class=" flash-data" data-judul="<?php echo session()->getFlashdata('success'); ?>" data-flashdata="Berhasil Log Out!" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>">
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="flash-data" data-judul="Login Gagal" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
    <?php endif; ?>

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card bagian-luar">
            <div class="card-header text-center">
                <a href="<?php echo base_url('login'); ?>" class="h1"><b>Si</b>ROHIS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Log in untuk memulai aktivitas Anda</p>

                <form action="<?php echo base_url('prosesLogin'); ?>" method="post" onsubmit="return validate_login()">

                    <?php echo csrf_field(); ?>

                    <!-- CEK EMAIL UNIK -->
                    <div class="panjang-tambahAkun" data-value="<?php echo count($data_email); ?>"></div>
                    <?php $i = 0;
                    foreach ($data_email as $email) : ?>
                        <div class="emailTambah<?php echo $i; ?>" data-value="<?php echo $email; ?>"></div>
                    <?php $i++;
                    endforeach; ?>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="prosesLogin" class="btn btn-primary btn-block">Log In</button>
                    </div>
            </div>
            </form>



        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>

    <!-- script manual -->
    <script src="<?php echo base_url(); ?>/js/sweetAlert.js"></script>


    <script>
        // VERIFIKASI LOGIN ======================================================================================================================
        function validate_login() {

            // Input Email - CEK HARUS UNIK
            var jumlah_email = $('.panjang-tambahAkun').data('value');
            var data_email = [];
            for (let i = 0; i < jumlah_email; i++) {
                data_email[i] = $('.emailTambah' + i).data('value');
            }

            var email = document.getElementById('email').value;
            if (email == '') {
                Swal.fire(
                    'Gagal',
                    'Email Harus Diisi!',
                    'error'
                )
                return false;
            } else {
                var rule_mail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
                var cek_mail = rule_mail.test(email);
                if (cek_mail) {
                    // CEK APAKAH SUDAH TERDAFTAR
                    var terdaftar = false;
                    for (let i = 0; i < jumlah_email; i++) {
                        if (email == data_email[i]) {
                            terdaftar = true;
                        }
                    }
                    if (terdaftar == false) {
                        Swal.fire(
                            'Gagal',
                            'Email Belum Terdaftar!',
                            'error'
                        )
                        return false;
                    }
                } else {
                    Swal.fire(
                        'Gagal',
                        'Alamat Email Tidak Valid!',
                        'error'
                    )
                    return false;
                }
            }

            // Input Password - Default adalah NIM
            var password = document.getElementById('password').value;
            if (password == '') {
                Swal.fire(
                    'Gagal',
                    'Password Harus Diisi!',
                    'error'
                )
                return false;
            }
        }
    </script>
</body>

</html>
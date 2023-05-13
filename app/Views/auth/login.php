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
</head>

<body class="hold-transition login-page">

    <!-- SWEET ALERT -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="flash-data" data-judul="<?php echo session()->getFlashdata('success'); ?>" data-flashdata="Berhasil Log Out!" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="flash-data" data-judul="Login Gagal" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
    <?php endif; ?>

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="<?php echo base_url('login'); ?>" class="h1"><b>Si</b>ROHIS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Log in untuk memulai aktivitas Anda</p>

                <form action="<?php echo base_url('prosesLogin'); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
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
</body>

</html>
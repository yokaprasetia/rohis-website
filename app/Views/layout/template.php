<?php
if (!isset($_SESSION['logged_in'])) {
    echo "
    <script>
    alert('Maaf, Silakan login terlebih dahulu...');
    document.location = 'login';
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
    <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/dist/img/logo-rohis.png" type="image/x-icon">
    <title><?php echo $judul; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Select Multiple -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/select2/css/select2.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">

    <!-- jsGrid -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid-theme.min.css">



    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- NAVBAR -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- NAVBAR KANAN - PROFIL -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('profil'); ?>" role="button">
                        <i class="fas fa-user"></i>
                        <span class="ml-2"><?php echo  $_SESSION['nama']; ?></span>
                    </a>
                </li>
            </ul>

        </nav>

        <!-- SIDEBAR -->
        <?php echo $this->include('layout/sidebar'); ?>



        <!-- BAGIAN KONTEN -->
        <div class="content-wrapper">

            <!-- JUDUL KONTEN -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $subjudul; ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RENDERING KONTEN -->
            <?php echo $this->renderSection('content'); ?>
        </div>

        <!-- FOOTER -->
        <footer class="main-footer">
            <strong>SiROHIS &copy; 2023</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>POLITEKNIK STATISTIKA STIS</b>
            </div>
        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- jsGrid -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jsgrid/demos/db.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- AdminLTE -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?php echo base_url('assets'); ?>/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/pages/dashboard3.js"></script>

    <!-- jQuery Knob -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url('assets'); ?>/plugins/sparklines/sparkline.js"></script>

    <!-- Select Multiple -->
    <script src="<?php echo base_url('assets'); ?>/plugins/select2/js/select2.full.min.js"></script>


    <!-- JS MANUAL -->
    <script src="<?php echo base_url(); ?>/js/jsGrid.js"></script>
    <script src="<?php echo base_url(); ?>/js/dataTable.js"></script>
    <script src="<?php echo base_url(); ?>/js/presensi.js"></script>
    <script src="<?php echo base_url(); ?>/js/multipleSelect.js"></script>
    <script src="<?php echo base_url(); ?>/js/sweetAlert.js"></script>
    <script src="<?php echo base_url(); ?>/js/kasBeranda.js"></script>
    <script src="<?php echo base_url(); ?>/js/kasKeuangan.js"></script>
    <script src="<?php echo base_url(); ?>/js/importData.js"></script>
    <script src="<?php echo base_url(); ?>/js/roleValidationInput.js"></script>
</body>

</html>
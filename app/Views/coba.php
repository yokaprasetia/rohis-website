<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">

    <!-- jsGrid -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid-theme.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- NAVBAR -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- NAVBAR KIRI - COLLAPSE -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- NAVBAR KANAN - ZOOM IN -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
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

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelola Akun</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="jsGrid1"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- FOOTER -->
        <footer class="main-footer">
            <strong>SiROHIS &copy; 2023</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>POLITEKNIK STATISTIKA STIS</b>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jsGrid -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jsgrid/demos/db.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",

                sorting: true,
                paging: true,

                data: db.clients,

                fields: [{
                        name: "Name",
                        type: "text",
                        width: 150
                    },
                    {
                        name: "Age",
                        type: "number",
                        width: 50
                    },
                    {
                        name: "Address",
                        type: "text",
                        width: 200
                    },
                    {
                        name: "Country",
                        type: "select",
                        items: db.countries,
                        valueField: "Id",
                        textField: "Name"
                    },
                    {
                        name: "Married",
                        type: "checkbox",
                        title: "Is Married"
                    }
                ]
            });
        });
    </script>
</body>

</html>
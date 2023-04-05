<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-danger">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Tempat</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Peserta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengumuman as $p) : ?>
                                    <tr>
                                        <td><?php echo $p['nama']; ?></td>
                                        <td><?php echo $p['tempat']; ?></td>
                                        <td><?php echo $p['tanggal']; ?></td>
                                        <td><?php echo $p['waktu']; ?></td>
                                        <td><?php echo $p['peserta']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>


<?php echo $this->endSection(); ?>
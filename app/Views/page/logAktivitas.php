<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
                $warnaQuotes = $warna[array_rand($warna)]; ?>

                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu</th>
                                    <th>Nama User</th>
                                    <th>NIM</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Aktivitas</th>
                                    <th>Id Aktivitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $d['waktu']; ?></td>
                                        <td><?php echo $d['nama_user']; ?></td>
                                        <td><?php echo $d['nim']; ?></td>
                                        <td><?php echo $d['jabatan']; ?></td>
                                        <td><?php echo $d['jenis_aktivitas']; ?></td>
                                        <td><?php echo $d['id_aktivitas']; ?></td>
                                        <td><?php echo $d['aksi']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
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
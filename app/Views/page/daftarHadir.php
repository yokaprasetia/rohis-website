<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <?php if ($berlangsung === true) : ?>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title col-12 text-center">Kegiatan Hari Ini : <?php echo $kegiatan_berlangsung['nama']; ?></h3>
                        </div>
                        <button class="btn btn-primary">Presensi Sekarang</button>
                    </div>
                <?php elseif ($berlangsung == false) : ?>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title col-12 text-center">Tidak Ada Kegiatan Yang Berlangsung</h3>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
                $warnaQuotes = $warna[array_rand($warna)]; ?>

                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Daftar Hadir</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tempat</th>
                                    <th>Tanggal</th>
                                    <th>Kehadiran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (sizeof($kehadiran) == 0) : ?>
                                    <?php for ($i = 0; $i < sizeof($daftar_kegiatan); $i++) : ?>
                                        <?php $kehadiran[$i] = 'Tidak Hadir'; ?>
                                    <?php endfor; ?>
                                <?php endif; ?>

                                <?php $i = 1; ?>
                                <?php foreach ($daftar_kegiatan as $kegiatan) : ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $kegiatan['nama'] ?></td>
                                        <td><?php echo $kegiatan['tempat'] ?></td>
                                        <td><?php echo $kegiatan['tanggal'] ?></td>
                                        <td><?php echo $kehadiran[$i - 1] ?></td>
                                        <td><a class="btn btn-primary" href="<?php echo base_url('detailKehadiran'); ?>/<?php echo $kegiatan['id']; ?>"><i class="fas fa-eye"></i></a></td>
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
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
                    <div class="card-header">
                        <h3 class="card-title">KEGIATAN : <?php echo strtoupper($kehadiran['nama_kegiatan']); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>NIM</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Presensi</th>
                                    <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
                                        <th>Bukti</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kehadiran['peserta'] as $peserta) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $peserta['nama']; ?></td>
                                        <td><?php echo $peserta['nim']; ?></td>
                                        <td><?php echo $peserta['tanggal']; ?></td>
                                        <td><?php echo $peserta['updated_at']; ?></td>
                                        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bukti<?php echo $peserta['id']; ?>">
                                                    <i class="fas fa-file-image fa-lg"></i>
                                                </button>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="<?php echo base_url('daftarHadir'); ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php foreach ($kehadiran['peserta'] as $peserta) : ?>
    <div class="modal fade" id="bukti<?php echo $peserta['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bukti Kehadiran - <?php echo $kehadiran['nama_kegiatan']; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="" style="width:100%" src="<?php echo base_url('bukti-kehadiran'); ?>/<?php echo $peserta['file']; ?>">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
<?php endforeach; ?>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

<?php echo $this->endSection(); ?>
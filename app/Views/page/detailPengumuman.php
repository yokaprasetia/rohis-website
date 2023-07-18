<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Detail Pengumuman <?php echo $detail['nama']; ?>
                        </h3>
                        <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary float-right">Kembali</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="col-1">1</td>
                                    <th class="col-2">Deskripsi</th>
                                    <td class="col-9"><?php echo $detail['isi']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">2</td>
                                    <th class="col-2">Tempat</th>
                                    <td class="col-9"><?php echo $detail['tempat']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">3</td>
                                    <th class="col-2">Tanggal</th>
                                    <td class="col-9"><?php echo $detail['tanggal']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">4</td>
                                    <th class="col-2">Waktu</th>
                                    <td class="col-9"><?php echo $detail['waktu_mulai']; ?> - <?php echo $detail['waktu_selesai']; ?> WIB</td>
                                </tr>
                                <tr>
                                    <td class="col-1">5</td>
                                    <th class="col-2">Peserta</th>
                                    <td class="col-9"><?php echo $detail['peserta']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">6</td>
                                    <th class="col-2">Jenis Kelamin</th>
                                    <td class="col-9"><?php echo $detail['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">7</td>
                                    <th class="col-2">Link</th>
                                    <td class="col-9"><?php echo ($detail['link'] != '') ? $detail['link'] : '<i>(offline)</i>' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
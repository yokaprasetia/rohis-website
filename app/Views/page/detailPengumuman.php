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
                            Detail <?php echo $detail['nama']; ?>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-2">Deskripsi</dt>
                            <dd class="col-sm-10"><?php echo $detail['isi']; ?></dd>

                            <dt class="col-sm-2">Tempat</dt>
                            <dd class="col-sm-10"><?php echo $detail['tempat']; ?></dd>

                            <dt class="col-sm-2">Tanggal</dt>
                            <dd class="col-sm-10"><?php echo $detail['tanggal']; ?></dd>

                            <dt class="col-sm-2">Waktu</dt>
                            <dd class="col-sm-10"><?php echo $detail['waktu_mulai']; ?> - <?php echo $detail['waktu_selesai']; ?> WIB</dd>

                            <dt class="col-sm-2">Peserta</dt>
                            <dd class="col-sm-10"><?php echo $detail['peserta']; ?></dd>

                            <dt class="col-sm-2">Link</dt>
                            <dd class="col-sm-10"><?php echo ($detail['link'] != '') ? $detail['link'] : '<i>(offline)</i>' ?></dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
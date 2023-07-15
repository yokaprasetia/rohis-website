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
                            Detail Akun <?php echo $detail['nama']; ?>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-2">Nama</dt>
                            <dd class="col-sm-10"><?php echo $detail['nama']; ?></dd>

                            <dt class="col-sm-2">NIM</dt>
                            <dd class="col-sm-10"><?php echo $detail['nim']; ?></dd>

                            <dt class="col-sm-2">Email</dt>
                            <dd class="col-sm-10"><?php echo $detail['email']; ?></dd>

                            <dt class="col-sm-2">Jabatan</dt>
                            <dd class="col-sm-10"><?php echo $detail['role']; ?></dd>

                            <dt class="col-sm-2">Kelas</dt>
                            <dd class="col-sm-10"><?php echo $detail['kelas']; ?></dd>

                            <dt class="col-sm-2">Angkatan</dt>
                            <dd class="col-sm-10"><?php echo $detail['angkatan']; ?></dd>

                            <dt class="col-sm-2">No HP</dt>
                            <dd class="col-sm-10"><?php echo $detail['no_hp']; ?></dd>

                            <dt class="col-sm-2">Domisili</dt>
                            <dd class="col-sm-10"><?php echo $detail['domisili']; ?></dd>

                            <dt class="col-sm-2">Tingkat</dt>
                            <dd class="col-sm-10"><?php echo $detail['tingkat']; ?></dd>

                            <dt class="col-sm-2">Tanggal Lahir</dt>
                            <dd class="col-sm-10"><?php echo $detail['tanggal_lahir']; ?></dd>

                            <dt class="col-sm-2">Alamat Kost</dt>
                            <dd class="col-sm-10"><?php echo $detail['alamat_kost']; ?></dd>

                            <dt class="col-sm-2">Jenis Kelamin</dt>
                            <dd class="col-sm-10"><?php echo $detail['jenis_kelamin']; ?></dd>

                            <dt class="col-sm-2">Status</dt>
                            <dd class="col-sm-10"><?php echo $detail['status']; ?></dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
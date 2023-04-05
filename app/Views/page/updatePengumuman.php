<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!-- ALERT -->
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('danger')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('danger') ?></div>
                <?php endif; ?>

                <div class="card card-primary card-outline">
                    <form method="post" action="<?php echo base_url('prosesUpdate') ?>">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id Kegiatan" value="<?php echo $info['id']; ?>" required>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kegiatan" value="<?php echo $info['nama']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="isi">Deskripsi</label>
                                <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Deskripsi Kegiatan" value="<?php echo $info['isi']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="tempat">Tempat</label>
                                <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Masukkan Tempat Kegiatan" value="<?php echo $info['tempat']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Kegiatan" value="<?php echo $info['tanggal']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="waktu_mulai">Waktu Mulai</label>
                                <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan" value="<?php echo $info['waktu_mulai']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="waktu_selesai">Waktu Selesai</label>
                                <input type="time" class="form-control" name="waktu_selesai" id="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan" value="<?php echo $info['waktu_selesai']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="peserta">Peserta</label>
                                <input type="text" class="form-control" name="peserta" id="peserta" placeholder="Masukkan Peserta Kegiatan" value="<?php echo $info['peserta']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan Link (opsional)" value="<?php echo $info['link']; ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php $this->endSection(); ?>
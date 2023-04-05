<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<div class="content">
    <div class="container-fluid">

        <!-- ALERT -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('danger')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('danger') ?></div>
        <?php endif; ?>

        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahPengumuman">
            <i class="fas fa-plus mr-2"></i>
            Tambah Pengumuman
        </button>
        <button type="button" class="btn btn-warning mb-4 ml-2" data-toggle="modal" data-target="#editPengumuman">
            <i class="fas fa-edit mr-2"></i>
            Edit Pengumuman
        </button>
        <div class="row">
            <div class="col-12">
                <?php foreach ($pengumuman as $p) : ?>
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-calendar-check mr-2"></i>
                                <?php echo $p['nama']; ?>
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="text-muted">Upload at : <?php echo $p['upload_at'] ?> WIB</small>
                            <p><?php echo $p['isi']; ?></p>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="<?php echo base_url('pengumumanDetail'); ?>/<?php echo $p['id']; ?>" class="btn btn-secondary">Selengkapnya</a>
                        </div>
                        <!-- /.card-footer-->
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<!-- TAMBAH FORM -->
<div class="modal fade" id="tambahPengumuman">
    <div class="modal-dialog tambahPengumuman">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Tambah Pengumuman</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('tambahPengumuman'); ?>">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="isi">Deskripsi</label>
                            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Deskripsi Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Masukkan Tempat Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="waktu_mulai">Waktu Mulai</label>
                            <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="waktu_selesai">Waktu Selesai</label>
                            <input type="time" class="form-control" name="waktu_selesai" id="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="peserta">Peserta</label>
                            <input type="text" class="form-control" name="peserta" id="peserta" placeholder="Masukkan Peserta Kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan Link (opsional)">
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Pengumuman</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- EDIT FORM -->
<div class="modal fade" id="editPengumuman">
    <div class="modal-dialog editPengumuman">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Nama Kegiatan</th>
                                        <th style="width: 100px">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;  ?>
                                    <?php foreach ($pengumuman as $p) : ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $p['nama'] ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="<?php echo base_url('updatePengumuman'); ?>/<?php echo $p['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('deletePengumuman'); ?>/<?php echo $p['id']; ?>" class="btn btn-danger" onClick="return confirm('Apakah Anda yakin ingin menghapus pengumuman <?php echo $p['nama']; ?>?')"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
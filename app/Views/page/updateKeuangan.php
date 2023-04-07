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
                    <?php echo form_open_multipart('tambahTransaksi'); ?>
                    <div class="card-body">

                        <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id transaksi" value="<?php echo $data['id']; ?>" required>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal transaksi" value="<?php echo $data['tanggal']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Masukkan Nominal Transaksi" value="<?php echo $data['nominal']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control" required>
                                <option value="Masuk" <?php echo ($data['jenis'] == 'Masuk') ? 'selected="selected"' : '' ?>>Masuk</option>
                                <option value="Keluar" <?php echo ($data['jenis'] == 'Keluar') ? 'selected="selected"' : '' ?>>Keluar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan Transaksi" value="<?php echo $data['keterangan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Bukti</label>
                            <input type="file" class="form-control" name="file" id="file" placeholder="Masukkan Bukti Transaksi" required>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="<?php echo base_url('keuangan'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php $this->endSection(); ?>
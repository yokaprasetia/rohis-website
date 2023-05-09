<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- SWEET ALERT -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('success'); ?>" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
        <?php endif; ?>

        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Bendahara') : ?>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahTransaksi">
                <i class="fas fa-plus mr-2"></i>
                Tambah Transaksi
            </button>
        <?php endif; ?>

        <a href="<?php echo base_url('coba'); ?>" class="btn btn-warning mb-4">Coba Javascript</a>

        <?php if (isset($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        <?php endif; ?>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Result Type:</label>
                                    <select id="peserta" name="peserta" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;">
                                        <option value="tingkat-1">Tingkat I</option>
                                        <option value="tingkat-2">Tingkat II</option>
                                        <option value="tingkat-3">Tingkat III</option>
                                        <option value="tingkat-4">Tingkat IV</option>
                                        <option value="umum">Umum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Jenis:</label>
                                    <select id="jenis" name="jenis" class="select2" style="width: 100%;">
                                        <option value="Masuk" selected>Transaksi Masuk</option>
                                        <option value="Keluar">Transaksi Keluar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Bulan:</label>
                                    <select id="bulan" name="bulan" class="select2" style="width: 100%;">
                                        <option value="januari" selected>Januari</option>
                                        <option value="februari">Februari</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="juli">Juli</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="oktober">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
        $warnaQuotes = $warna[array_rand($warna)]; ?>

        <div class="callout callout-<?php echo $warnaQuotes; ?>">
            <p>TOTAL KEUANGAN (KAS)</p>
            <h5><strong>Rp<?php echo $total_kas; ?>,00</strong></h5>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Transaksi</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nominal</th>
                                    <th>Jenis</th>
                                    <th>Keterangan</th>
                                    <th>Update At</th>
                                    <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Bendahara') : ?>
                                        <th>Bukti</th>
                                        <th>Aksi</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($keuangan as $k) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $k['tanggal']; ?></td>
                                        <td><?php echo $k['nominal']; ?></td>
                                        <td>
                                            <?php if ($k['jenis'] === 'Masuk') : ?>
                                                <i class="fas fa-arrow-circle-down mr-2" style='color: green'></i>
                                            <?php elseif ($k['jenis'] === 'Keluar') : ?>
                                                <i class="fas fa-arrow-circle-up mr-2" style='color: red'></i>
                                            <?php endif; ?>

                                            <?php echo $k['jenis']; ?>
                                        </td>
                                        <td><?php echo $k['keterangan']; ?></td>
                                        <td><?php echo $k['updated_at']; ?></td>
                                        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Bendahara') : ?>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bukti<?php echo $k['id']; ?>">
                                                    <i class="fas fa-file-image fa-lg"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?php echo $k['id']; ?>"><i class="fas fa-edit"></i></button>
                                                <a class="btn btn-danger btn-sm keuangan-hapus" href="<?php echo base_url('deleteTransaksi'); ?>/<?php echo $k['id']; ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahTransaksi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <?php echo form_open_multipart('tambahTransaksi'); ?>
                <div class="card-body">

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal transaksi" required>
                    </div>

                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Masukkan Nominal Transaksi" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" id="jenis" class="form-control" required>
                            <option value="Masuk">Masuk</option>
                            <option value="Keluar">Keluar</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan Transaksi" required>
                    </div>

                    <div class="form-group">
                        <label for="file">Bukti</label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Masukkan Bukti Transaksi" required>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($keuangan as $k) : ?>

    <div class="modal fade" id="bukti<?php echo $k['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bukti Transaksi - <?php echo $k['keterangan']; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="" style="width:100%" src="<?php echo base_url('bukti-transaksi'); ?>/<?php echo $k['file']; ?>">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

    <div class="modal fade" id="update<?php echo $k['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Transaksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Mulai dari sini -->
                    <?php echo form_open_multipart('tambahTransaksi'); ?>
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id transaksi" value="<?php echo $k['id']; ?>" required>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal transaksi" value="<?php echo $k['tanggal']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Masukkan Nominal Transaksi" value="<?php echo $k['nominal']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control" required>
                                <option value="Masuk" <?php echo ($k['jenis'] == 'Masuk') ? 'selected="selected"' : '' ?>>Masuk</option>
                                <option value="Keluar" <?php echo ($k['jenis'] == 'Keluar') ? 'selected="selected"' : '' ?>>Keluar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan Transaksi" value="<?php echo $k['keterangan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Bukti</label>
                            <input type="file" class="form-control" name="file" id="file" placeholder="Masukkan Bukti Transaksi" required>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update Transaksi</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

<?php endforeach; ?>

<?php $this->endSection(); ?>
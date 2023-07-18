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

        <!-- untuk javascript -->
        <div style="display: none">
            <p id="tabel-jenis">All</p>
            <p id="tabel-bulan">All</p>
        </div>

        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Bendahara') : ?>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahTransaksi">
                <i class="fas fa-plus mr-2"></i>
                Tambah Transaksi
            </button>
        <?php endif; ?>

        <?php if (isset($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        <?php endif; ?>

        <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
        $warnaQuotes = $warna[array_rand($warna)]; ?>

        <div class="d-flex flex-wrap justify-content-between">
            <div class="callout callout-<?php echo $warnaQuotes; ?> col-lg-3">
                <p class="text-center"><i class="fas fa-arrow-circle-down mr-2" style='color: green'></i>TRANSAKSI MASUK</p>
                <h5 class="text-center uang-masuk"><strong><?php echo $kas['masuk']; ?></strong></h5>
            </div>
            <div class="callout callout-<?php echo $warnaQuotes; ?> col-lg-5">
                <p class="text-center">TOTAL KEUANGAN (KAS)</p>
                <h5 id="uang-total" class="text-center uang-total"><strong><?php echo $kas['total']; ?></strong></h5>
            </div>
            <div class="callout callout-<?php echo $warnaQuotes; ?> col-lg-3">
                <p class="text-center"><i class="fas fa-arrow-circle-up mr-2" style='color: red'></i>TRANSAKSI KELUAR</p>
                <h5 class="text-center uang-keluar"><strong><?php echo $kas['keluar']; ?></strong></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <div class="card-body d-flex flex-row pb-0">
                            <div class="form-group mr-2 d-flex flex-row align-items-center">
                                <h3 class="card-title">Filter Tabel :</h3>
                            </div>
                            <div class=" form-group mr-2">
                                <select class="btn btn-secondary" name="jenis" id="jenis" onClick="GetSelectedItem('jenis');" required>
                                    <option value="All">Semua Transaksi</option>
                                    <option value="Masuk">Transaksi Masuk</option>
                                    <option value="Keluar">Transaksi Keluar</option>
                                </select>
                            </div>
                            <div class="form-group mr-2">
                                <select class="btn btn-secondary" name="bulan" id="bulan" onClick="GetSelectedItem('bulan');" required>
                                    <option value="All">Semua Bulan</option>
                                    <option value="-01-">Januari</option>
                                    <option value="-02-">Februari</option>
                                    <option value="-03-">Maret</option>
                                    <option value="-04-">April</option>
                                    <option value="-05-">Mei</option>
                                    <option value="-06-">Juni</option>
                                    <option value="-07-">Juli</option>
                                    <option value="-08-">Agustus</option>
                                    <option value="-09-">September</option>
                                    <option value="-10-">Oktober</option>
                                    <option value="-11-">November</option>
                                    <option value="-12-">Desember</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="tabel-tujuan table table-bordered table-hover">
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
                                        <td><?php echo $k['jenis']; ?></td>
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

<!-- MENAMBAHKAN TRANSAKSI -->
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
                <?php echo form_open_multipart('tambahTransaksi', array('onsubmit' => 'return validate_tambahTransaksi();')); ?>
                <div class="card-body">

                    <div class="form-group">
                        <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal transaksi">
                    </div>

                    <div class="form-group">
                        <label for="nominal">Nominal <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Masukkan Nominal Transaksi">
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis <span class="text-danger">*</span></label>
                        <select name="jenis" id="jenis" class="form-control">
                            <option value="Masuk">Masuk</option>
                            <option value="Keluar">Keluar</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan Transaksi">
                    </div>

                    <div class="form-group">
                        <label for="file">Bukti <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Masukkan Bukti Transaksi">
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

    <!-- BUKTI TRANSAKSI -->
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

    <!-- UPDATE TRANSAKSI -->
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
                    <?php $id_update = $k['id']; ?>
                    <form method="post" action="<?php echo base_url('tambahTransaksi') ?>" onsubmit="return validate_updateTransaksi(<?php echo $k['id']; ?>)">
                        <div class="card-body">
                            <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id transaksi" value="<?php echo $k['id']; ?>" required>

                            <div class="form-group">
                                <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal<?php echo $k['id']; ?>" placeholder="Masukkan Tanggal transaksi" value="<?php echo $k['tanggal']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="nominal">Nominal <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nominal" id="nominal<?php echo $k['id']; ?>" placeholder="Masukkan Nominal Transaksi" value="<?php echo $k['nominal']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="jenis">Jenis <span class="text-danger">*</span></label>
                                <select name="jenis" id="jenis<?php echo $k['id']; ?>" class="form-control">
                                    <option value="Masuk" <?php echo ($k['jenis'] == 'Masuk') ? 'selected="selected"' : '' ?>>Masuk</option>
                                    <option value="Keluar" <?php echo ($k['jenis'] == 'Keluar') ? 'selected="selected"' : '' ?>>Keluar</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan<?php echo $k['id']; ?>" placeholder="Masukkan Keterangan Transaksi" value="<?php echo $k['keterangan']; ?>">
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
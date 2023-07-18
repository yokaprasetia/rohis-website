<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>
<?php

use CodeIgniter\I18n\Time; ?>

<div class="content">
    <div class="container-fluid">

        <!-- SWEET ALERT -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('success'); ?>" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
        <?php endif; ?>

        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahPengumuman">
                <i class="fas fa-plus mr-2"></i>
                Tambah Pengumuman
            </button>
            <button type="button" class="btn btn-warning mb-4 ml-2" data-toggle="modal" data-target="#editPengumuman">
                <i class="fas fa-edit mr-2"></i>
                Edit Pengumuman
            </button>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">

                <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
                $warnaQuotes = $warna[array_rand($warna)]; ?>

                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1; ?>
                                <?php foreach ($pengumuman as $p) : ?>

                                    <!-- Bintang untuk kegiatan wajib -->
                                    <?php
                                    $listTingkat = explode(', ', $p['peserta']);
                                    $listJk = explode(', ', $p['jenis_kelamin']);
                                    $wajib = false;
                                    for ($j = 0; $j < count($listTingkat); $j++) {
                                        if ($listTingkat[$j] == session()->get('tingkat')) {
                                            for ($k = 0; $k < count($listJk); $k++) {
                                                if ($listJk[$k] == session()->get('jenis_kelamin')) {
                                                    $wajib = true;
                                                }
                                            }
                                        }
                                    }
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?php echo $p['nama']; ?>
                                            <?php if ($wajib == true) : ?>
                                                <i class='fa fa-star'></i>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $p['tanggal']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('pengumumanDetail'); ?>/<?php echo $p['id']; ?>" class="btn btn-secondary">Selengkapnya</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TAMBAH PENGUMUMAN -->
<div class="modal fade" id="tambahPengumuman">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Tambah Pengumuman</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('tambahPengumuman'); ?>" onsubmit="return validate_tambahPengumuman()">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nama">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="isi">Deskripsi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Deskripsi Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Masukkan Tempat Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="waktu_mulai">Waktu Mulai <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="waktu_selesai">Waktu Selesai <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" name="waktu_selesai" id="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="peserta">Peserta <span class="text-danger">*</span></label>
                            <select id="peserta" name="listPeserta[]" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;">
                                <option value="Tingkat I">Tingkat I</option>
                                <option value="Tingkat II">Tingkat II</option>
                                <option value="Tingkat III">Tingkat III</option>
                                <option value="Tingkat IV">Tingkat IV</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select id="jenis_kelamin" name="listJenisKelamin[]" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;">
                                <option value="Laki-Laki" selected="selected">Laki-Laki</option>
                                <option value="Perempuan" selected="selected">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan Link (opsional)">
                        </div>

                        <div class="form-group">
                            <label for="send_email">Notifikasi Email <span class="text-danger">*</span></label>
                            <select name="send_email" id="send_email" class="form-control">
                                <option value="Ya">Ya</option>
                                <option value="Tidak" selected>Tidak</option>
                            </select>
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

<!-- EDIT PAGE -->
<div class="modal fade" id="editPengumuman">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit Pengumuman</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

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
                                                    <?php
                                                    $waktu_sekarang = Time::now('Asia/Jakarta');
                                                    $time = Time::parse($p['tanggal']);
                                                    if (!$time->isBefore($waktu_sekarang)) :
                                                    ?>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal<?php echo $p['id']; ?>"><i class="fas fa-edit"></i></button>
                                                        <a class="btn btn-danger pengumuman-hapus" href="<?php echo base_url('deletePengumuman'); ?>/<?php echo $p['id']; ?>"><i class="fas fa-trash"></i></a>
                                                    <?php endif; ?>
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


<!-- EDIT PENGUMUMAN -->
<?php foreach ($pengumuman as $p) : ?>

    <div class="modal fade" id="modal<?php echo $p['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Update Pengumuman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('tambahPengumuman') ?>" onsubmit="return validate_updatePengumuman(<?php echo $p['id']; ?>)">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id Kegiatan" value="<?php echo $p['id']; ?>" required>

                            <div class="form-group">
                                <label for="nama<?php echo $p['id']; ?>">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama<?php echo $p['id']; ?>" placeholder="Masukkan Nama Kegiatan" value="<?php echo $p['nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="isi<?php echo $p['id']; ?>">Deskripsi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="isi" id="isi<?php echo $p['id']; ?>" placeholder="Masukkan Deskripsi Kegiatan" value="<?php echo $p['isi']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="tempat<?php echo $p['id']; ?>">Tempat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tempat" id="tempat<?php echo $p['id']; ?>" placeholder="Masukkan Tempat Kegiatan" value="<?php echo $p['tempat']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="tanggal<?php echo $p['id']; ?>">Tanggal <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal<?php echo $p['id']; ?>" placeholder="Masukkan Tanggal Kegiatan" value="<?php echo $p['tanggal']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="waktu_mulai<?php echo $p['id']; ?>">Waktu Mulai <span class="text-danger">*</span></label>
                                <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai<?php echo $p['id']; ?>" placeholder="Masukkan Waktu Mulai Kegiatan" value="<?php echo $p['waktu_mulai']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="waktu_selesai<?php echo $p['id']; ?>">Waktu Selesai <span class="text-danger">*</span></label>
                                <input type="time" class="form-control" name="waktu_selesai" id="waktu_selesai<?php echo $p['id']; ?>" placeholder="Masukkan Waktu Selesai Kegiatan" value="<?php echo $p['waktu_selesai']; ?>">
                            </div>

                            <?php
                            $tingkat1 = false;
                            $tingkat2 = false;
                            $tingkat3 = false;
                            $tingkat4 = false;
                            $umum = false;

                            $list_tingkat = explode(', ', $p['peserta']);
                            for ($i = 0; $i < count($list_tingkat); $i++) {
                                if ($list_tingkat[$i] == 'Tingkat I') {
                                    $tingkat1 = true;
                                }
                                if ($list_tingkat[$i] == 'Tingkat II') {
                                    $tingkat2 = true;
                                }
                                if ($list_tingkat[$i] == 'Tingkat III') {
                                    $tingkat3 = true;
                                }
                                if ($list_tingkat[$i] == 'Tingkat IV') {
                                    $tingkat4 = true;
                                }
                                if ($list_tingkat[$i] == 'Umum') {
                                    $umum = true;
                                }
                            }
                            ?>

                            <div class="form-group">
                                <label for="updatePeserta<?php echo $p['id']; ?>">Peserta <span class="text-danger">*</span></label>
                                <select id="updatePeserta<?php echo $p['id']; ?>" name="listPeserta[]" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;">
                                    <option value="Tingkat I" <?php echo ($tingkat1 == true) ? 'selected="selected"' : '' ?>>Tingkat I</option>
                                    <option value="Tingkat II" <?php echo ($tingkat2 == true) ? 'selected="selected"' : '' ?>>Tingkat II</option>
                                    <option value="Tingkat III" <?php echo ($tingkat3 == true) ? 'selected="selected"' : '' ?>>Tingkat III</option>
                                    <option value="Tingkat IV" <?php echo ($tingkat4 == true) ? 'selected="selected"' : '' ?>>Tingkat IV</option>
                                    <option value="Umum" <?php echo ($umum == true) ? 'selected="selected"' : '' ?>>Umum</option>
                                </select>
                            </div>

                            <?php
                            $laki_laki = false;
                            $perempuan = false;
                            $jenis_kelamin = explode(', ', $p['jenis_kelamin']);
                            for ($i = 0; $i < count($jenis_kelamin); $i++) {
                                if ($jenis_kelamin[$i] == 'Laki-Laki') {
                                    $laki_laki = true;
                                }
                                if ($jenis_kelamin[$i] == 'Perempuan') {
                                    $perempuan = true;
                                }
                            }
                            ?>
                            <div class="form-group">
                                <label for="jenis_kelamin<?php echo $p['id']; ?>">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select id="jenis_kelamin<?php echo $p['id']; ?>" name="listJenisKelamin[]" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;">
                                    <option value="Laki-Laki" <?php echo ($laki_laki == true) ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($perempuan == true) ? 'selected="selected"' : '' ?>>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="link<?php echo $p['id']; ?>">Link</label>
                                <input type="text" class="form-control" name="link" id="link<?php echo $p['id']; ?>" placeholder="Masukkan Link (opsional)" value="<?php echo $p['link']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="send_email<?php echo $p['id']; ?>">Notifikasi Email <span class="text-danger">*</span></label>
                                <select name="send_email" id="send_email<?php echo $p['id']; ?>" class="form-control">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak" selected>Tidak</option>
                                </select>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php echo $this->endSection(); ?>
<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php if ($berlangsung === true) : ?>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title col-12 text-center">Kegiatan Hari Ini :</h3>
                            <h3 class="card-title col-12 text-center mt-2"><strong><?php echo strtoupper($kegiatan_berlangsung['nama']); ?></strong></h3>
                        </div>
                        <div class=" card-body d-flex flex-row justify-content-center">
                            <?php if ($status_presensi === 'Belum') : ?>
                                <button type="button" class="btn btn-primary col-6 justify-content-center" data-toggle="modal" data-target="#presensi">Presensi Sekarang</button>
                            <?php elseif ($status_presensi === 'Sudah') : ?>
                                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#SudahPresensi">Anda Telah Melakukan Presensi</button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php elseif ($berlangsung == false) : ?>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title col-12 text-center">Tidak Ada Kegiatan Yang Berlangsung</h3>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
                $warnaQuotes = $warna[array_rand($warna)]; ?>

                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Daftar Hadir</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tempat</th>
                                    <th>Tanggal</th>
                                    <th>Kehadiran</th>
                                    <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
                                    <th>Lihat Kehadiran</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1; ?>
                                <?php foreach ($daftar_kegiatan as $kegiatan) : ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $kegiatan['nama'] ?></td>
                                        <td><?php echo $kegiatan['tempat'] ?></td>
                                        <td><?php echo $kegiatan['tanggal'] ?></td>
                                        <td><?php echo $kehadiran[$i - 1] ?></td>
                                        <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
                                        <td><a class="btn btn-primary" href="<?php echo base_url('detailKehadiran'); ?>/<?php echo $kegiatan['id']; ?>"><i class="fas fa-eye"></i></a></td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <?php if ($role == 'Admin' || $role == 'Ketua' || $role == 'Humas') : ?>
                <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Kehadiran Anggota</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Kehadiran Total (%)</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php for ($i = 0; $i < count($daftarAnggota); $i++) : ?>
                                    <tr>
                                        <td><?php echo $i + 1; ?></td>
                                        <td><?php echo $daftarAnggota[$i]['nama']; ?></td>
                                        <td><?php echo $daftarAnggota[$i]['nim']; ?></td>
                                        <td><?php echo round($presentaseHadir[$i]); ?></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <?php endif; ?>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<div class="modal fade" id="presensi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Presensi Kehadiran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <?php echo form_open_multipart('tambahKehadiran'); ?>
                <div class="card-body">

                    <div class="form-group">
                        <label for="file">Bukti Kehadiran</label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Masukkan Bukti Kehadiran" required>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Presensi Sekarang</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
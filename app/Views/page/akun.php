<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- Main content -->
<div class="content">

    <!-- ALERT -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('danger')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('danger') ?></div>
    <?php endif; ?>

    <div class="card card-outline card-danger">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAkun">
                <i class="fas fa-plus mr-2"></i>
                Tambah Akun
            </button>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Jabatan</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>No. HP</th>
                        <th>Domisili</th>
                        <th>Prodi</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat Kost</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($database as $db) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $db['nama']; ?></td>
                            <td><?php echo $db['email']; ?></td>
                            <td><?php echo $db['nim']; ?></td>
                            <td><?php echo $db['role']; ?></td>
                            <td><?php echo $db['kelas']; ?></td>
                            <td><?php echo $db['angkatan']; ?></td>
                            <td><?php echo $db['no_hp']; ?></td>
                            <td><?php echo $db['domisili']; ?></td>
                            <td><?php echo $db['prodi']; ?></td>
                            <td><?php echo $db['tanggal_lahir']; ?></td>
                            <td><?php echo $db['alamat_kost']; ?></td>
                            <td><?php echo $db['jenis_kelamin']; ?></td>
                            <td>
                                <a href="<?php echo base_url('updateAkun'); ?>/<?php echo $db['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('deleteAkun'); ?>/<?php echo $db['id']; ?>" class="btn btn-danger" onClick="return confirm('Apakah Anda yakin ingin menghapus Akun <?php echo $db['nama']; ?> dengan NIM <?php echo $db['nim']; ?>?')"><i class="fas fa-trash"></i></a>
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

<!-- TAMBAH AKUN BARU : NAMA, EMAIL, NIM, PASSWORD, JABATAN -->
<div class="modal fade" id="tambahAkun">
    <div class="modal-dialog tambahAkun">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Akun</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <form method="post" action="<?php echo base_url('tambahAkun') ?>">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                        </div>

                        <div class="form-group">
                            <label for="role">Jabatan</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil Ketua">Wakil Ketua</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Anggota" selected="selected">Anggota</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                        </div>

                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password">
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
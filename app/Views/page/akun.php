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

    <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
    $warnaQuotes = $warna[array_rand($warna)]; ?>

    <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAkun">
                <i class="fas fa-plus mr-2"></i>
                Tambah Akun
            </button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
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
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal<?php echo $db['id']; ?>"><i class="fas fa-edit"></i></button>
                                <a href="<?php echo base_url('deleteAkun'); ?>/<?php echo $db['id']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda yakin ingin menghapus Akun <?php echo $db['nama']; ?> dengan NIM <?php echo $db['nim']; ?>?')"><i class="fas fa-trash"></i></a>
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
    <div class="modal-dialog modal-lg">
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
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                        </div>

                        <div class="form-group">
                            <label for="role">Jabatan</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="Ketua">Ketua</option>
                                <option value="Humas">Humas</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Anggota" selected="selected">Anggota</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                        </div>

                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password" required>
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


<?php foreach ($database as $db) : ?>
    <div class="modal fade" id="modal<?php echo $db['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Akun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- Mulai dari sini -->
                    <form method="post" action="<?php echo base_url('prosesUpdateAkun'); ?>">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id Kegiatan" value="<?php echo $db['id']; ?>" required>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo $db['nama']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="<?php echo $db['email']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" value="<?php echo $db['no_hp']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="domisili">Domisili</label>
                                <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan Domisili" value="<?php echo $db['domisili']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" value="<?php echo $db['nim']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan Kelas" value="<?php echo $db['kelas']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="angkatan">Angkatan</label>
                                <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Masukkan Angkatan" value="<?php echo $db['angkatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-control" required>
                                    <option value="D-III ST" <?php echo ($db['prodi'] == 'D-III ST') ? 'selected="selected"' : '' ?>>D-III ST</option>
                                    <option value="D-IV ST" <?php echo ($db['prodi'] == 'D-IV ST') ? 'selected="selected"' : '' ?>>D-IV ST</option>
                                    <option value="D-IV KS" <?php echo ($db['prodi'] == 'D-IV KS') ? 'selected="selected"' : '' ?>>D-IV KS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $db['tanggal_lahir']; ?>" required>
                            </div>

                            <input type="hidden" class="form-control" name="password" password="password" value="<?php echo $db['password']; ?>">

                            <div class="form-group">
                                <label for="role">Jabatan</label>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="Ketua" <?php echo ($db['role'] == 'Ketua') ? 'selected="selected"' : '' ?>>Ketua</option>
                                    <option value="Humas" <?php echo ($db['role'] == 'Humas') ? 'selected="selected"' : '' ?>>Humas</option>
                                    <option value="Bendahara" <?php echo ($db['role'] == 'Bendahara') ? 'selected="selected"' : '' ?>>Bendahara</option>
                                    <option value="Anggota" <?php echo ($db['role'] == 'Anggota') ? 'selected="selected"' : '' ?>>Anggota</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat_kost">alamat_kost</label>
                                <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" placeholder="Masukkan Alamat Kost" value="<?php echo $db['angkatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-Laki" <?php echo ($db['role'] == 'Laki-Laki') ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($db['role'] == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
                                </select>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Akun</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php $this->endSection(); ?>
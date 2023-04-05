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
                    <form method="post" action="<?php echo base_url('prosesUpdateAkun'); ?>">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="id" placeholder="Masukkan id Kegiatan" value="<?php echo $info['id']; ?>" required>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo $info['nama']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="<?php echo $info['email']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" value="<?php echo $info['no_hp']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="domisili">Domisili</label>
                                <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan Domisili" value="<?php echo $info['domisili']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" value="<?php echo $info['nim']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan Kelas" value="<?php echo $info['kelas']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="angkatan">Angkatan</label>
                                <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Masukkan Angkatan" value="<?php echo $info['angkatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-control" required>
                                    <option value="D-III ST" <?php echo ($info['prodi'] == 'D-III ST') ? 'selected="selected"' : '' ?>>D-III ST</option>
                                    <option value="D-IV ST" <?php echo ($info['prodi'] == 'D-IV ST') ? 'selected="selected"' : '' ?>>D-IV ST</option>
                                    <option value="D-IV KS" <?php echo ($info['prodi'] == 'D-IV KS') ? 'selected="selected"' : '' ?>>D-IV KS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $info['tanggal_lahir']; ?>" required>
                            </div>

                            <input type="hidden" class="form-control" name="password" password="password" value="<?php echo $info['password']; ?>">

                            <div class="form-group">
                                <label for="role">Jabatan</label>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="Ketua" <?php echo ($info['role'] == 'Ketua') ? 'selected="selected"' : '' ?>>Ketua</option>
                                    <option value="Wakil Ketua" <?php echo ($info['role'] == 'Wakil Ketua') ? 'selected="selected"' : '' ?>>Wakil Ketua</option>
                                    <option value="Sekretaris" <?php echo ($info['role'] == 'Sekretaris') ? 'selected="selected"' : '' ?>>Sekretaris</option>
                                    <option value="Bendahara" <?php echo ($info['role'] == 'Bendahara') ? 'selected="selected"' : '' ?>>Bendahara</option>
                                    <option value="Anggota" <?php echo ($info['role'] == 'Anggota') ? 'selected="selected"' : '' ?>>Anggota</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat_kost">alamat_kost</label>
                                <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" placeholder="Masukkan Alamat Kost" value="<?php echo $info['angkatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-Laki" <?php echo ($info['role'] == 'Laki-Laki') ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($info['role'] == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php $this->endSection(); ?>
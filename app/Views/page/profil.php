<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="col-md-10">

        <!-- ALERT -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('danger')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('danger') ?></div>
        <?php endif; ?>

        <div class="card card-widget widget-user">

            <div class="widget-user-header bg-success">
                <h3 class="widget-user-desc "><?php echo $profil['nama']; ?></h3>
            </div>

            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?php echo base_url(); ?>/assets/dist/img/foto-profil.png" alt="Avatar">
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">NIM</h5>
                            <span class="description-text"><?php echo $profil['nim']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">KELAS</h5>
                            <span class="description-text"><?php echo $profil['kelas']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">ANGKATAN</h5>
                            <span class="description-text">
                                <?php
                                echo $profil['angkatan'];
                                echo " / ";
                                echo $profil['prodi'];
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">NO HP</h5>
                            <span class="description-text"><?php echo $profil['no_hp']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">DOMISILI</h5>
                            <span class="description-text"><?php echo $profil['domisili']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">EMAIL</h5>
                            <span class="description-text"><?php echo $profil['email']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">TANGGAL LAHIR</h5>
                            <span class="description-text"><?php echo $profil['tanggal_lahir']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">ALAMAT KOST</h5>
                            <span class="description-text"><?php echo $profil['alamat_kost']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">JENIS KELAMIN</h5>
                            <span class="description-text"><?php echo $profil['jenis_kelamin']; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-12 border-top">
                        <div class="description-block">
                            <h5 class="description-header">JABATAN ROHIS</h5>
                            <span class="description-text"><?php echo $profil['role']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-widget widget-user">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateProfil">
                Update Profil Pengguna
            </button>
        </div>
        <div class="card card-widget widget-user">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ubahPassword">
                Ubah Password Pengguna
            </button>
        </div>
    </div>

</div>

<div class="modal fade" id="updateProfil">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <form method="post" action="<?php echo base_url('updateProfil'); ?>">
                    <div class="card-body">

                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $profil['id']; ?>">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo $profil['nama']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="<?php echo $profil['email']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan noHp" value="<?php echo $profil['no_hp']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="domisili">Domisili</label>
                            <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan domisili" value="<?php echo $profil['domisili']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" value="<?php echo $profil['nim']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas" value="<?php echo $profil['kelas']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Masukkan angkatan" value="<?php echo $profil['angkatan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control" required>
                                <option value="D-III ST" <?php echo ($profil['prodi'] == 'D-III ST') ? 'selected="selected"' : '' ?>>D-III ST</option>
                                <option value="D-IV ST" <?php echo ($profil['prodi'] == 'D-IV ST') ? 'selected="selected"' : '' ?>>D-IV ST</option>
                                <option value="D-IV KS" <?php echo ($profil['prodi'] == 'D-IV KS') ? 'selected="selected"' : '' ?>>D-IV KS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan tanggal lahir" value="<?php echo $profil['tanggal_lahir']; ?>" required>
                        </div>

                        <input type="hidden" class="form-control" name="password" password="password" value="<?php echo $profil['password']; ?>">

                        <div class="form-group">
                            <label for="alamat_kost">Alamat Kost</label>
                            <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" placeholder="Masukkan alamat kost" value="<?php echo $profil['alamat_kost']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="Laki-Laki" <?php echo ($profil['jenis_kelamin'] == 'Laki-Laki') ? 'selected="selected"' : '' ?>>Laki Laki</option>
                                <option value="Perempuan" <?php echo ($profil['jenis_kelamin'] == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahPassword">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <form method="post" action="<?php echo base_url('updatePassword'); ?>">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="passwordLama">Password Lama</label>
                            <input type="password" class="form-control" name="passwordLama" id="passwordLama" placeholder="Masukkan Password yang Lama" required>
                        </div>

                        <div class="form-group">
                            <label for="passwordBaru">Password Baru</label>
                            <input type="password" class="form-control" name="passwordBaru" id="passwordBaru" placeholder="Masukkan Password yang Baru" required>
                        </div>

                        <div class="form-group">
                            <label for="konfirmasiPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword" placeholder="Konfirmasi Password" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
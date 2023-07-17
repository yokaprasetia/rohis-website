<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="col-md-10">

        <!-- SWEET ALERT -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('success'); ?>" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
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
                                echo $profil['tingkat'];
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
                Update Profil
            </button>
        </div>
        <div class="card card-widget widget-user">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ubahPassword">
                Ubah Password
            </button>
        </div>
    </div>

</div>

<!-- UPDATE PROFIL -->
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
                <form method="post" action="<?php echo base_url('updateProfil'); ?>" onsubmit="return validate_updateProfil()">
                    <div class="card-body">

                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $profil['id']; ?>">

                        <div class="form-group">
                            <label for="nama">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo $profil['nama']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="<?php echo $profil['email']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan nomor HP" value="<?php echo $profil['no_hp']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="domisili">Domisili <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan domisili" value="<?php echo $profil['domisili']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" value="<?php echo $profil['nim']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas" value="<?php echo $profil['kelas']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="angkatan">Angkatan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Masukkan angkatan" value="<?php echo $profil['angkatan']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tingkat">Tingkat <span class="text-danger">*</span></label>
                            <select name="tingkat" id="tingkat" class="form-control">
                                <option value="Tingkat I" <?php echo ($profil['tingkat'] == 'Tingkat I') ? 'selected="selected"' : '' ?>>Tingkat I</option>
                                <option value="Tingkat II" <?php echo ($profil['tingkat'] == 'Tingkat II') ? 'selected="selected"' : '' ?>>Tingkat II</option>
                                <option value="Tingkat III" <?php echo ($profil['tingkat'] == 'Tingkat III') ? 'selected="selected"' : '' ?>>Tingkat III</option>
                                <option value="Tingkat IV" <?php echo ($profil['tingkat'] == 'Tingkat IV') ? 'selected="selected"' : '' ?>>Tingkat IV</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan tanggal lahir" value="<?php echo $profil['tanggal_lahir']; ?>">
                        </div>

                        <input type="hidden" class="form-control" name="password" password="password" value="<?php echo $profil['password']; ?>">

                        <div class="form-group">
                            <label for="alamat_kost">Alamat Kost <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" placeholder="Masukkan alamat kost" value="<?php echo $profil['alamat_kost']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
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
                <form method="post" action="<?php echo base_url('updatePassword'); ?>" onsubmit="return validate_updatePassword()">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="passwordLama">Password Lama <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="passwordLama" id="passwordLama" placeholder="Masukkan Password yang Lama">
                        </div>

                        <div class="form-group">
                            <label for="passwordBaru">Password Baru <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="passwordBaru" id="passwordBaru" placeholder="Masukkan Password yang Baru">
                        </div>

                        <div class="form-group">
                            <label for="konfirmasiPassword">Konfirmasi Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword" placeholder="Konfirmasi Password">
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
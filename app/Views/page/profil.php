<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>


<!-- ISI KONTEN -->
<div class="content">
    <div class="col-md-10">
        <div class="card card-widget widget-user">

            <div class="widget-user-header bg-success">
                <h3 class="widget-user-desc ">Alexander Pierce</h3>
            </div>

            <div class="widget-user-image">
                <img class="img-circle elevation-2" src=" <?php echo base_url('assets'); ?>/dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">NIM</h5>
                            <span class="description-text">221910846</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">KELAS</h5>
                            <span class="description-text">4SI2</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">ANGKATAN</h5>
                            <span class="description-text">61</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">NO HP</h5>
                            <span class="description-text">0895379261962</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">ALAMAT</h5>
                            <span class="description-text">YOGYAKARTA</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-top">
                        <div class="description-block">
                            <h5 class="description-header">EMAIL</h5>
                            <span class="description-text">prasetia356@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-sm-12 border-top">
                        <div class="description-block">
                            <h5 class="description-header">JABATAN ROHIS</h5>
                            <span class="description-text">ANGGOTA</span>
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
    <div class="modal-dialog updateProfil">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <form method="post" src="<?php echo base_url('profil'); ?>">
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
                            <label for="kelas">kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas">
                        </div>

                        <div class="form-group">
                            <label for="angkatan">angkatan</label>
                            <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Masukkan angkatan">
                        </div>

                        <div class="form-group">
                            <label for="noHp">noHp</label>
                            <input type="text" class="form-control" name="noHp" id="noHp" placeholder="Masukkan noHp">
                        </div>

                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email">
                        </div>

                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Masukkan jabatan">
                        </div>

                        <div class="form-group">
                            <label for="foto">Pilih Foto Profil</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" nama="upload" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahPassword">
    <div class="modal-dialog ubahPassword">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Mulai dari sini -->
                <form method="post" src="<?php echo base_url('profil'); ?>">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                        </div>

                        <div class="form-group">
                            <label for="kelas">Password Lama</label>
                            <input type="password" class="form-control" name="passwordLama" id="passwordLama" placeholder="Masukkan Password yang Lama">
                        </div>

                        <div class="form-group">
                            <label for="kelas">Password Baru</label>
                            <input type="password" class="form-control" name="passwordBaru" id="passwordBaru" placeholder="Masukkan Password yang Baru">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" nama="upload" class="btn btn-primary">Ubah Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>
<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- Main content -->
<div class="content">

    <!-- SWEET ALERT -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('success'); ?>" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="flash-data" data-judul="<?php echo $subjudul; ?>" data-flashdata="<?php echo session()->getFlashdata('error'); ?>" data-flashkey="<?php echo session()->getFlashKeys('error')[0]; ?>"></div>
    <?php endif; ?>

    <?php $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
    $warnaQuotes = $warna[array_rand($warna)]; ?>

    <div class="card card-outline card-<?php echo $warnaQuotes; ?>">
        <div class="card-header d-flex flex-row">
            <div>
                <button id="akun-hapus" type="button" class="btn btn-primary p-2" data-toggle="modal" data-target="#tambahAkun">
                    <i class="fas fa-plus mr-1"></i>
                    Tambah Akun
                </button>
            </div>
            <!-- <div>
                <button id="akun-hapus" type="button" class="btn btn-warning p-2 ml-2" data-toggle="modal" data-target="#importData">
                    <i class="fa fa-download mr-1 ml-1"></i>
                    Import Data
                </button>
            </div> -->
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Opsi</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($database as $db) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editAkun<?php echo $db['id']; ?>"><i class="fas fa-edit"></i></button>
                                <a class="btn btn-danger btn-sm akun-hapus" href="<?php echo base_url('deleteAkun'); ?>/<?php echo $db['id']; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                            <td><?php echo $db['nama']; ?></td>
                            <td><?php echo $db['email']; ?></td>
                            <td><?php echo $db['role']; ?></td>
                            <td><?php echo $db['jenis_kelamin']; ?></td>
                            <td><?php echo $db['status']; ?></td>
                            <td>
                                <a href="<?php echo base_url('akunDetail'); ?>/<?php echo $db['id']; ?>" class="btn btn-secondary">Selengkapnya</a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
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
                <form class="form-tambahAkun" method="post" action="<?php echo base_url('tambahAkun') ?>" onsubmit="return validate_tambahAkun()">
                    <div class="card-body">

                        <!-- CEK EMAIL UNIK -->
                        <div class="panjang-tambahAkun" data-value="<?php echo count($data_email); ?>"></div>
                        <?php $i = 0;
                        foreach ($data_email as $email) : ?>
                            <div class="emailTambah<?php echo $i; ?>" data-value="<?php echo $email; ?>"></div>
                        <?php $i++;
                        endforeach; ?>


                        <div class="form-group">
                            <label for="nama">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                        </div>

                        <div class="form-group">
                            <label for="role">Jabatan <span class="text-danger">*</span></label>
                            <select name="role" id="role" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Humas">Humas</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Anggota" selected="selected">Anggota</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Default Password adalah NIM">
                        </div>

                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password <span class="text-danger">*</span></label>
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

<!-- IMPORT DATA -->
<div class="modal fade" id="importData">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Import Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('importExcel'); ?>" method="post" enctype="multipart/form-data" onsubmit="return validate_importAkun()">
                    <div class="input-group mb-3 p-1 btn btn-outline-dark">
                        <div class="custom-file">
                            <input type="file" class="form-grup" name="fileUpload" id="importExcel">
                        </div>
                        <div class="input-group-append">
                            <button id="uploadExcel" type="submit" name="submit" value="Upload" class="btn btn-outline-dark btn-primary text-white" type="button">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-2">Download template file : </p>
                <a href="<?php echo base_url('downloadFile'); ?>/example_file.xlsx" class="btn btn-success">
                    <i class='fas fa-file-alt mr-1'></i>example file
                </a>
            </div>
        </div>
    </div>
</div>

<?php foreach ($database as $db) : ?>
    <!-- EDIT PAGE -->
    <div class="modal fade" id="editAkun<?php echo $db['id']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Edit Akun - <?php echo $db['nama']; ?></h4>
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
                                        <tr>
                                            <td>1</td>
                                            <td>Ubah Profil</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahProfil<?php echo $db['id']; ?>"><i class="fas fa-edit"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ubah Password</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahPassword<?php echo $db['id']; ?>"><i class="fas fa-edit"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ubah Status</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahStatus<?php echo $db['id']; ?>"><i class="fas fa-edit"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ubahProfil<?php echo $db['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Profil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- Mulai dari sini -->
                    <form class="form-ubahProfil" method="post" action="<?php echo base_url('prosesUbahProfil'); ?>" onsubmit="return validate_ubahProfil(<?php echo $db['id']; ?>)">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="idUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan id Kegiatan" value="<?php echo $db['id']; ?>" required>

                            <div class="form-group">
                                <label for="namaUbahProfil<?php echo $db['id']; ?>">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="namaUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Nama" value="<?php echo $db['nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="emailUbahProfil<?php echo $db['id']; ?>">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="emailUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan email" value="<?php echo $db['email']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="no_hpUbahProfil<?php echo $db['id']; ?>">No HP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="no_hp" id="no_hpUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Nomor HP" value="<?php echo $db['no_hp']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="domisiliUbahProfil<?php echo $db['id']; ?>">Domisili <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="domisili" id="domisiliUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Domisili" value="<?php echo $db['domisili']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="nimUbahProfil<?php echo $db['id']; ?>">NIM <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nim" id="nimUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan NIM" value="<?php echo $db['nim']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="kelasUbahProfil<?php echo $db['id']; ?>">Kelas <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kelas" id="kelasUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Kelas" value="<?php echo $db['kelas']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="angkatanUbahProfil<?php echo $db['id']; ?>">Angkatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="angkatan" id="angkatanUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Angkatan" value="<?php echo $db['angkatan']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="tingkatUbahProfil<?php echo $db['id']; ?>">Tingkat <span class="text-danger">*</span></label>
                                <select name="tingkat" id="tingkatUbahProfil<?php echo $db['id']; ?>" class="form-control">
                                    <option value="Tingkat I" <?php echo ($db['tingkat'] == 'Tingkat I') ? 'selected="selected"' : '' ?>>Tingkat I</option>
                                    <option value="Tingkat II" <?php echo ($db['tingkat'] == 'Tingkat II') ? 'selected="selected"' : '' ?>>Tingkat II</option>
                                    <option value="Tingkat III" <?php echo ($db['tingkat'] == 'Tingkat III') ? 'selected="selected"' : '' ?>>Tingkat III</option>
                                    <option value="Tingkat IV" <?php echo ($db['tingkat'] == 'Tingkat IV') ? 'selected="selected"' : '' ?>>Tingkat IV</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahirUbahProfil<?php echo $db['id']; ?>">Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahirUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Tanggal Lahir" value="<?php echo $db['tanggal_lahir']; ?>">
                            </div>

                            <input type="hidden" class="form-control" name="password" password="password" value="<?php echo $db['password']; ?>">

                            <div class="form-group">
                                <label for="roleUbahProfil<?php echo $db['id']; ?>">Jabatan <span class="text-danger">*</span></label>
                                <select name="role" id="roleUbahProfil<?php echo $db['id']; ?>" class="form-control">
                                    <option value="Admin" <?php echo ($db['role'] == 'Admin') ? 'selected="selected"' : '' ?>>Admin</option>
                                    <option value="Ketua" <?php echo ($db['role'] == 'Ketua') ? 'selected="selected"' : '' ?>>Ketua</option>
                                    <option value="Humas" <?php echo ($db['role'] == 'Humas') ? 'selected="selected"' : '' ?>>Humas</option>
                                    <option value="Bendahara" <?php echo ($db['role'] == 'Bendahara') ? 'selected="selected"' : '' ?>>Bendahara</option>
                                    <option value="Anggota" <?php echo ($db['role'] == 'Anggota') ? 'selected="selected"' : '' ?>>Anggota</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat_kostUbahProfil<?php echo $db['id']; ?>">Alamat Kost <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat_kost" id="alamat_kostUbahProfil<?php echo $db['id']; ?>" placeholder="Masukkan Alamat Kost" value="<?php echo $db['alamat_kost']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelaminUbahProfil<?php echo $db['id']; ?>">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="jenis_kelaminUbahProfil<?php echo $db['id']; ?>" class="form-control">
                                    <option value="Laki-Laki" <?php echo ($db['role'] == 'Laki-Laki') ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($db['role'] == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
                                </select>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubahPassword<?php echo $db['id']; ?>">
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
                    <form method="post" action="<?php echo base_url('prosesUbahPassword'); ?>" onsubmit="return validate_ubahPassword(<?php echo $db['id']; ?>)">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="idUbahPassword<?php echo $db['id']; ?>" placeholder="Masukkan id Kegiatan" value="<?php echo $db['id']; ?>" required>

                            <div class="form-group">
                                <label for="passwordUbahPassword<?php echo $db['id']; ?>">Password Baru <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="passwordUbahPassword<?php echo $db['id']; ?>" placeholder="Masukkan password baru">
                            </div>
                            <div class="form-group">
                                <label for="konfirmasi_passwordUbahPassword<?php echo $db['id']; ?>">Konfirmasi Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_passwordUbahPassword<?php echo $db['id']; ?>" placeholder="Masukkan konfirmasi password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubahStatus<?php echo $db['id']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- Mulai dari sini -->
                    <form method="post" action="<?php echo base_url('prosesUbahStatus'); ?>">
                        <div class="card-body">

                            <input type="hidden" class="form-control" name="id" id="idUbahStatus<?php echo $db['id']; ?>" placeholder="Masukkan id Kegiatan" value="<?php echo $db['id']; ?>" required>

                            <div class="form-group pb-5">
                                <label for="statusUbahStatus<?php echo $db['id']; ?>">Status Akun <span class="text-danger">*</span></label>
                                <select name="status" id="statusUbahStatus<?php echo $db['id']; ?>" class="form-control" required>
                                    <option value="Aktif" <?php echo ($db['status'] == 'Aktif') ? 'selected="selected"' : '' ?>>Aktif</option>
                                    <option value="Tidak Aktif" <?php echo ($db['status'] == 'Tidak Aktif') ? 'selected="selected"' : '' ?>>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah Status</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php $this->endSection(); ?>
<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- Main content -->
<div class="content">
    <div class="card card-outline card-danger">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAkun">
                Tambah Akun
            </button>
        </div>
        <div class="card-body">
            <div id="jsGrid1"></div>
        </div>
    </div>
</div>

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
                <form method="post" src="">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="kelas">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                        </div>

                        <div class="form-group">
                            <label for="kelas">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
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

<?php $this->endSection(); ?>
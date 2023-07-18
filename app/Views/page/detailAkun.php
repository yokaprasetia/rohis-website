<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Detail Akun <?php echo $detail['nama']; ?>
                        </h3>
                        <a href="<?php echo base_url('akun'); ?>" class="btn btn-secondary float-right">Kembali</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="col-1">1</td>
                                    <th class="col-3">Nama</th>
                                    <td class="col-8"><?php echo $detail['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">2</td>
                                    <th class="col-3">NIM</th>
                                    <td class="col-8"><?php echo $detail['nim']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">3</td>
                                    <th class="col-3">Email</th>
                                    <td class="col-8"><?php echo $detail['email']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">4</td>
                                    <th class="col-3">Jabatan</th>
                                    <td class="col-8"><?php echo $detail['role']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">5</td>
                                    <th class="col-3">Kelas</th>
                                    <td class="col-8"><?php echo $detail['kelas']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">6</td>
                                    <th class="col-3">Angkatan</th>
                                    <td class="col-8"><?php echo $detail['angkatan']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">7</td>
                                    <th class="col-3">No HP</th>
                                    <td class="col-8"><?php echo $detail['no_hp']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">8</td>
                                    <th class="col-3">Domisili</th>
                                    <td class="col-8"><?php echo $detail['domisili']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">9</td>
                                    <th class="col-3">Tingkat</th>
                                    <td class="col-8"><?php echo $detail['tingkat']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">10</td>
                                    <th class="col-3">Tanggal Lahir</th>
                                    <td class="col-8"><?php echo $detail['tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">11</td>
                                    <th class="col-3">Alamat Kost</th>
                                    <td class="col-8"><?php echo $detail['alamat_kost']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">12</td>
                                    <th class="col-3">Jenis Kelamin</th>
                                    <td class="col-8"><?php echo $detail['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-1">13</td>
                                    <th class="col-3 text-left">Status</th>
                                    <td class="col-8"><?php echo $detail['status']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
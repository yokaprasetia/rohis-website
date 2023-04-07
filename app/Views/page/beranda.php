<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">

        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>


        <div class="alert alert-<?php echo $warna_quotes;  ?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i> Quotes Today</h5>
            <span></i><?php echo $quotes; ?></span>
        </div>


        <div class="row">

            <div class="col-6">
                <div class="small-box bg-success">
                    <div class="inner ml-3">
                        <p>Jumlah Pengguna</p>
                        <h3><?php echo $jumlah_pengguna; ?></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users mr-3"></i>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="small-box bg-warning">
                    <div class="inner ml-3">
                        <p>Jumlah Kas</p>
                        <h3>Rp<?php echo $total_kas; ?>,00</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign mr-3"></i>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>
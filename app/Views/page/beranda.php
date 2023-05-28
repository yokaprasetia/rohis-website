<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<!-- ISI KONTEN -->
<div class="content">
    <div class="container-fluid">

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="flash-data" data-judul="<?php echo session()->get('nama'); ?>" data-flashdata="<?php echo session()->getFlashdata('success'); ?>" data-flashkey="<?php echo session()->getFlashKeys('success')[0]; ?>"></div>
        <?php endif; ?>

        <div class="col-12 callout callout-<?php echo $warna_quotes;  ?>">
            <h5><i class="icon fas fa-info mr-3"></i> Quotes Today</h5>

            <p></i><?php echo $quotes; ?></p>
        </div>

        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="small-box bg-success">
                    <div class="inner ml-3">
                        <p>Jumlah Saudara User Rohis</p>
                        <h3><?php echo $jumlah_pengguna; ?></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users mr-3"></i>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="small-box bg-warning">
                    <div class="inner ml-3">
                        <p>Total Keuangan (Kas)</p>
                        <h3>Rp<?php echo $total_kas; ?>,00</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign mr-3"></i>
                    </div>
                </div>
            </div>

            <!-- Pengumuman Terbaru -->
            <div class="card card-<?php echo $warna_quotes; ?> card-outline col-12 col-lg-7">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-calendar-check mr-2"></i>
                        Pengumuman Terbaru
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <?php
                $list_peserta = explode(', ', $pengumuman_terbaru['peserta']);
                $wajib = false;
                for ($i = 0; $i < count($list_peserta); $i++) {
                    if ($list_peserta[$i] == session()->get('tingkat')) {
                        $wajib = true;
                    }
                }
                ?>

                <div class="card-body">
                    <p class="card-title col-12 pl-0"><strong><?php echo $pengumuman_terbaru['nama']; ?><?php echo ($wajib == true) ? " (<i class='fa fa-star'></i>)" : '' ?></strong></p>
                    <small class="text-muted">Updated at : <?php echo $pengumuman_terbaru['updated_at']; ?> WIB</small>
                    <p><?php echo $pengumuman_terbaru['isi']; ?></p>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary">Selengkapnya</a>
                </div>
                <!-- /.card-footer-->
            </div>

            <!-- Progres Presensi -->
            <div class="row col-12 col-lg-4 ml-lg-3">
                <div class="card col-12">
                    <div class="card-header">

                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            PRESENTASE KEHADIRAN
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0 pb-2">
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" class="knob" value="<?php echo round($presensi); ?>" data-skin="tron" data-thickness="0.2" data-width="200" data-height="200" data-fgColor="#00c0ef" readonly>

                                <div class="knob-label"><a href="<?php echo base_url('daftarHadir'); ?>" class="btn btn-secondary">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>
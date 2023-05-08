<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card card-outline card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Table Filter</h3>
                    </div>
                    <div class="card-body d-flex flex-row">

                        <div class=" form-group mr-2">
                            <select class="btn btn-secondary" name="jenis" id="jenis" class="form-control" onClick="GetSelectedItem('jenis');" required>
                                <option value="Masuk" selected="selected">Transaksi Masuk</option>
                                <option value="Keluar">Transaksi Keluar</option>
                            </select>
                        </div>
                        <div class="form-group mr-2">
                            <select class="btn btn-secondary" name="bulan" id="bulan" class="form-control" onClick="GetSelectedItem('bulan');" required>
                                <option value="Januari" selected="selected">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                            </select>
                        </div>

                        <div class="form-group col-6 mr-2">
                            <select id="peserta" name="peserta[]" class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;" onClick="GetSelectedItem('peserta');" required>
                                <option value="tingkat-1">Tingkat I</option>
                                <option value="tingkat-2">Tingkat II</option>
                                <option value="tingkat-3">Tingkat III</option>
                                <option value="tingkat-4">Tingkat IV</option>
                                <option value="umum">Umum</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card card-outline card-danger">
                    <div class="card-header">
                        <h3 id="keuangan-transaksi" class="card-title">Riwayat Transaksi</h3>
                    </div>

                    <div id="tabel-jenis" class="card-body">
                        <div class="content">Coba</div>
                    </div>
                    <div id="tabel-bulan" class="card-body">
                        <div class="content">Coba</div>
                    </div>
                    <div id="tabel-peserta" class="card-body">
                        <div class="content">Coba</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function GetSelectedItem(el) {
        var e = document.getElementById(el);
        var value = e.options[e.selectedIndex].value;
        var text = e.options[e.selectedIndex].text;

        if (el == 'jenis') {
            document.getElementById('tabel-jenis').innerHTML = text;
        }
        if (el == 'bulan') {
            document.getElementById('tabel-bulan').innerHTML = text;
        }
        if (el == 'peserta') {
            document.getElementById('tabel-peserta').innerHTML = text;
        }
    }
</script>


<?php $this->endSection(); ?>
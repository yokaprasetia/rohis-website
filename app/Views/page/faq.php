<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>


<!-- ISI KONTEN -->
<div class="content">
    <div class="row">
        <div class="col-12" id="accordion">
            <div class="card card-<?php echo $warna[0]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Apakah pengguna bisa mengganti password?
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        Bisa, terdapat fitur update data untuk memudahkan pengguna dalam memperbarui profil atau password.
                    </div>
                </div>
            </div>
            <div class="card card-<?php echo $warna[1]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Apakah daftar hadir sudah mencakup semua kegiatan?
                        </h4>
                    </div>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Sudah, progres kehadiran terdapat 2 jenis, yaitu secara keseluruhan dan keterangan di setiap kegiatan.
                    </div>
                </div>
            </div>
            <div class="card card-<?php echo $warna[2]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Bagaimana cara mengubungi Admin ketika pengguna mengalami masalah?
                        </h4>
                    </div>
                </a>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Silahkan menuju bagian bawah halaman FAQ, akan diarahkan menghubungi via <i>Whatsapp</i>.
                    </div>
                </div>
            </div>
            <div class="card card-<?php echo $warna[3]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Bagaimana jika pengguna lupa password?
                        </h4>
                    </div>
                </a>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Silakan menghubungi Admin lebih lanjut.
                    </div>
                </div>
            </div>
            <div class="card card-<?php echo $warna[4]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Apakah total kas dari Rohis dapat dilihat oleh pengguna?
                        </h4>
                    </div>
                </a>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Ya, total kas tersebut dapat dilihat oleh pengguna, sekaligus sebagai penlaporan terhadap kegiatan yang telah dilakukan.
                    </div>
                </div>
            </div>
            <div class="card card-<?php echo $warna[5]; ?> card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            Apakah anggota boleh mengikuti seluruh kegiatan Rohis?
                        </h4>
                    </div>
                </a>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Boleh, selama kegiatan tersebut bersifat umum dan bisa diikuti oleh yang bersangkutan.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3 text-center">
            <p class="lead">
                <a href="https://wa.me/62895379261962" target="_blank">Hubungi kami</a>,
                jika masih mengalami kendala atau pertanyaan.<br />
            </p>
        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>
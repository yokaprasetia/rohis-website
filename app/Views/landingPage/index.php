<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SiROHIS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets-landing'); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets-landing'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets-landing'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets-landing'); ?>/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= HEADER & NAVBAR ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets-landing'); ?>/img/logo-rohis.png" alt="logo-rohis">
                <span>SiROHIS</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#team">Struktur</a></li>
                    <li><a class="getstarted scrollto" href="<?php echo base_url('login'); ?>">Log In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <!-- ======= BAGIAN HERO ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">SiROHIS</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sistem Informasi UKM Kerohanian Islam Politeknik Statistika STIS</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="<?php echo base_url('login'); ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Log In</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo base_url('assets-landing'); ?>/img/logo-rohis.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>


    <main id="main">
        <!-- ======= BAGIAN TENTANG ROHIS ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Rohis STIS</h3>
                            <p>“Kamu (umat Islam) adalah umat yang terbaik yang dilahirkan untuk manusia (karena kamu), menyuruh (berbuat) yang ma'ruf, dan mencegah dari yang mungkar, dan beriman kepada Allah. Sekiranya Ahli kitab beriman, tentulah itu lebih baik bagi mereka. Di antara mereka adalah orang-orang fasik.”</p>
                            <p><strong>(Ali ‘Imran : 110)</strong></p>
                            <div class="text-center text-lg-start">
                                <a href="<?php echo base_url('login'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?php echo base_url('assets-landing'); ?>/img/tentang-rohis.jpg" class="img-fluid" alt="tentang-rohis">
                    </div>

                </div>
            </div>

        </section>


        <!-- ======= BAGIAN LAYANAN ======= -->
        <section id="services" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>LAYANAN</h2>
                    <p>Mengapa harus SiROHIS?</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="<?php echo base_url('assets-landing'); ?>/img/layanan-1.png" class="img-fluid" alt="">
                            <h3>Mudah dan Efektif</h3>
                            <p>Pengelolaan daftar hadir dan penyampaian pengumuman kini lebih mudah dan efektif.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="<?php echo base_url('assets-landing'); ?>/img/layanan-2.png" class="img-fluid" alt="">
                            <h3>Up to Date</h3>
                            <p>Data dan Informasi yang tersedia <i>up-to-date</i> dan pengguna dapat mengelola informasi pribadi dengan mudah.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="<?php echo base_url('assets-landing'); ?>/img/layanan-3.png" class="img-fluid" alt="">
                            <h3>Akses Mudah</h3>
                            <p>Progress kehadiran dapat dilihat oleh pengguna setelah melakukan presensi kehadiran dalam suatu kegiatan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- ======= BAGIAN TESTIMONI ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimoni</h2>
                    <p>Apa yang mereka katakan?</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Ada keuntungan ketika menjadi anggota rohis. Kita akan terbawa suasana pro aktif dan terdorong untuk berkarya, baik itu di kegiatan mentoring, pengabdian kepada masyarakat, dan sebagainya. Kamu juga akan mendapat banyak teman. Lebih dari sekedar teman, tapi teman yang sholeh-sholehah.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url('assets-landing'); ?>/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Sosialisator</h4>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Di rohis kita terbuka. Ada masalah pribadi bisa dishare dan direspon tanpa harus dibully atas kelemahan kita. Manusia memang makhluk yang lemah bukan? Kakak-kakak mentor akan membantu mencari jawaban dari permasalahan. Rohis feels like home…
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url('assets-landing'); ?>/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Mentor</h4>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Di Rohis kita akan diajarin cara membaca Al-Qur’an. Lebih dari itu kita juga akan belajar ilmu tajwid, ilmu tahsin, ilmu tafsir, dan ilmu tadabbur. Ilmu-ilmu itu adalah pondasi yang penting dalam mempelajari Al-Qur’an.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url('assets-landing'); ?>/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Islamic Fighter</h4>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Rohis memang bukan UKM olahraga. Tapi rohis peduli kesehatan! Sesuai anjuran Rasulullah untuk menjaga kesehatan. Meskipun di Rohis gak latihan fisik, tapi di sini kita dibiasakan dengan suasan shaum sunnah, tafakur alam, dan berlatih mengontrol emosi. Kesemuanya itu juga bisa membuatmu sehat.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url('assets-landing'); ?>/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Encourager</h4>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Di Rohis juga mengusahakan suntikan dana dari bisnis ala Rohis. Banyak anggota yang diajarkan berjualan. Item jualannya bervariasi seperti donat, kue, gorengan, atau bisa juga bazar buku, majalah, kaset dan vcd islami.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url('assets-landing'); ?>/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>

        <!-- ======= BAGIAN STRUKTUR ORGANISASI ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Struktur Organisasi</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?php echo base_url('assets-landing'); ?>/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Ketua Umum</span>
                                <p>Semangat dan pantang menyerah untuk maju dalam mencapai hal yang kita inginkan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?php echo base_url('assets-landing'); ?>/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Humas</span>
                                <p>Soft skill juga diperlukan dalam suatu organisasi, sehingga hadapi semua rintangan yang menghadang.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?php echo base_url('assets-landing'); ?>/img/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Bendahara</span>
                                <p>Manajemen waktu sangat dibutuhkan dalam suatu kehidupan. Jalanilah kehidupan dengan optimis dan penuh semangat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?php echo base_url('assets-landing'); ?>/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anggota</span>
                                <p>Bertanggung jawab dan dapat dipercaya adalah hal yang harus dimiliki oleh seorang pemimpin.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Event</h2>
                    <p>Event apa aja nih?</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="<?php echo base_url('assets-landing'); ?>/img/event/event-1.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Muktamar & Rohis Award</h3>
                            <h3 class="post-date">Kegiatan ta'lim rutin di Masjid Al-Munawar Pancoran, Jakarta Selatan dan terdapat live streaming muslim yang berhalangan hadir bisa mengikuti kajian tersebut.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="<?php echo base_url('assets-landing'); ?>/img/event/event-2.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Ta'lim rutin setiap Senin</h3>
                            <h3 class="post-date">Kegiatan Muktamar dan Rohis Award pada tanggal 18 September 2022 semoga menjadi sarana untuk evaluasi diri dan berbenah untuk kedepannya.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="<?php echo base_url('assets-landing'); ?>/img/event/event-3.png" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Kajian Rutin</h3>
                            <h3 class="post-date">Kajian Rutin dilaksanakan setiap hari Senin dan Kamis setelah sholah maghrib sampai menjelang isya'.</h3>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?php echo base_url('assets-landing'); ?>/img/logo-rohis.png" alt="">
                            <span>SiROHIS</span>
                        </a>
                        <p>Menyediakan data dan informasi yang <i>up to date</i>, serta meningkatkan efisiensi operasional dengan otomatisasi proses bisnis yang dapat menghemat waktu dan biaya.</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/ROHISSTIS" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/groups/rohis.stis/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/rohisstis/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UChdfxz6UuNcaTszwcM2voAw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://www.termsofservicegenerator.net/live.php?token=zy3DKhTboUcBEIv8JRHCWYt1PqZnYYLa" target="_blank">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://www.websiteprivacypolicygenerator.com/privacy.php" target="_blank">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>
                            Jl. Otto Iskandardinata No.64C <br>
                            Jatinegara, Jakarta Timur 13330<br>
                            DKI Jakarta <br>
                            <strong>Phone:</strong> <a href="https://wa.me/62895379261962" target="_blank">+62 8953 7926 1962</a><br>
                            <strong>Email:</strong> rohis@stis.ac.id<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                SiROHIS &copy; <strong><span>2023</span></strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets-landing'); ?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets-landing'); ?>/js/main.js"></script>

</body>

</html>
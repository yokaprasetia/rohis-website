<!-- SIDEBAR -->
<aside class="main-sidebar sidebar-dark-success elevation-4">

    <!-- LOGO ROHIS -->
    <a href="<?php echo base_url('beranda'); ?>" class="brand-link">
        <img src="<?php echo base_url('assets'); ?>/dist/img/logo-rohis.png" alt="Rohis Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SiROHIS</span>
    </a>

    <div class="sidebar">

        <!-- USER PROFIL -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>/foto-profil/<?php echo $sidebarProfil; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo base_url('profil'); ?>" class="d-block">Yoka Prasetia</a>
            </div>
        </div>

        <!-- SIDEBAR FITUR -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('beranda'); ?>" class="nav-link <?php echo ($active == 'beranda') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <li class="nav-header">AKTIVITAS</li>

                <li class="nav-item">
                    <a href="<?php echo base_url('akun'); ?>" class="nav-link <?php echo ($active == 'akun') ? 'active' : '' ?>">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Akun</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('pengumuman'); ?>" class="nav-link <?php echo ($active == 'pengumuman') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Pengumuman Informasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('keuangan'); ?>" class="nav-link <?php echo ($active == 'keuangan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Keuangan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('daftarHadir'); ?>" class="nav-link <?php echo ($active == 'daftarHadir') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Daftar Hadir</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('kegiatan'); ?>" class="nav-link <?php echo ($active == 'kegiatan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>

                <li class="nav-header">TINDAKAN</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('faq'); ?>" class="nav-link <?php echo ($active == 'faq') ? 'active' : '' ?>">
                        <i class="nav-icon fa fa-info-circle"></i>
                        <p>FAQ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('logout'); ?>" onClick="return confirm('Apakah Anda yakin ingin Log Out?')" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>Log Out</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
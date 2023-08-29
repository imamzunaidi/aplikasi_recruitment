<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <!-- menu drop down sebelah kanan untuk lougout -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
   
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"><?= $this->session->userdata('is_aktif') ?></div>
           
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- custom menu dalam dashboard -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="<?= base_url() ?>assets/img/logosmk.jpg" width = "80px" alt="" class = "mt-3">
            <br>
            <a href="" class = "">E-Recruitment</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RA</a>
          </div>
          <!-- Sidebar Untuk Admin -->
            <?php if($this->session->userdata('hak_akses') == 'admin'){?>
              <ul class="sidebar-menu mt-3">
                <li class="menu-header">Dashboard</li>
                <?php $halaman = $this->uri->segment('1'); ?>
                <li><a class="nav-link" href="<?= base_url('dashboard')?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Data Master</li>
                <li class="nav-item dropdown <?php if($halaman == 'data-jurusan' || $halaman == 'data-profile-sekolah' || $halaman == 'data-galeri' || $halaman == 'data-alur' || $halaman == 'data-informasi'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Data Profile</span></a>
                  <ul class="dropdown-menu">
  
                    <li class="<?php if($halaman == 'data-profile-sekolah'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-profile-sekolah')?>">Data Profile Sekolah</a></li>
                    <li class="<?php if($halaman == 'data-galeri'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-galeri')?>">Data Galeri</a></li>
                    <li class="<?php if($halaman == 'data-alur'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-alur')?>">Data Alur</a></li>
                    <li class="<?php if($halaman == 'data-informasi'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-informasi')?>">Data Informasi</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown <?php if($halaman == 'data-admin' ||$halaman == 'data-kepala-sekolah' || $halaman == 'data-pelamar' ){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Data Users</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-admin')?>">Data Admin</a></li>
                    <li class="<?php if($halaman == 'data-kepala-sekolah'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-kepala-sekolah')?>">Data Kepala Sekolah</a></li>
                    <li class="<?php if($halaman == 'data-pelamar'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pelamar')?>">Data Pelamar</a></li>
                  </ul>
                </li>
                <li class="menu-header">Data Lowongan</li>
                <li class = "<?php if($halaman == 'data-kategori'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-kategori')?>"><i class="fas fa-calendar-check"></i> <span>Data Kategori</span></a></li>
                <li class = "<?php if($halaman == 'data-lowongan'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-lowongan')?>"><i class="fas fa-calendar-check"></i> <span>Data Lowongan</span></a></li>
                
                <li class="menu-header">Data Proses Seleksi</li>
                <li class = "<?php if($halaman == 'data-seleksi-administrasi'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-seleksi-administrasi')?>"><i class="fas fa-calendar-check"></i> <span>Seleksi Administrasi</span></a></li>
                <li class = "<?php if($halaman == 'data-wawancara'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-wawancara')?>"><i class="fas fa-calendar-check"></i> <span>Data Wawancara</span></a></li>
                <li class = "<?php if($halaman == 'data-test-tulis'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-test-tulis')?>"><i class="fas fa-calendar-check"></i> <span>Data Test Tulis</span></a></li>
                <li class = "<?php if($halaman == 'data-test-mengajar'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-test-mengajar')?>"><i class="fas fa-calendar-check"></i> <span>Data Test Mengajar</span></a></li>
                <li class = "<?php if($halaman == 'data-diterima'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-diterima')?>"><i class="fas fa-calendar-check"></i> <span>Data Diterima</span></a></li>
                <li class = "<?php if($halaman == 'data-tidak-lolos'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-tidak-lolos')?>"><i class="fas fa-calendar-check"></i> <span>Data Tidak Lolos</span></a></li>
                <li class="menu-header">Data Kontak</li>
                <li class = "<?php if($halaman == 'data-pesan'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pesan')?>"><i class="fas fa-calendar-check"></i> <span>Data Kontak Pesan</span></a></li>
                <li class="menu-header">Data Laporan</li>
                <li class="nav-item dropdown <?php if($halaman == 'laporan-keterima' ||$halaman == 'laporan-ketolak'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Laporan</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'laporan-keterima'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-keterima')?>">Data Keterima</a></li>
                    <li class="<?php if($halaman == 'laporan-ketolak'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-ketolak')?>">Data Tidak Diterima</a></li>
                  </ul>
                </li>
              </ul>

            <?php } ?>
        </aside>
      </div>

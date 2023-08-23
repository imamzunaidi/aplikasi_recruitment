<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= base_url()?>"><span>E</span>-REC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
          <li><a href="<?= base_url()?>#about">About</a></li>
          <li><a href="<?= base_url()?>#services">Instruction</a></li>
          <li><a href="<?= base_url()?>#portfolio">Gallery</a></li>
          <li><a href="<?= base_url()?>#blog">Information</a></li>
          <!-- <li><a href="<?= base_url()?>#hasil">Hasil</a></li> -->
          <li><a href="<?= base_url()?>#contact">Contact</a></li>
          <?php if($this->session->userdata('id_pengguna') == ''){ ?>
            <li><a href="<?= base_url('login-siswa')?>">Login</a></li>
          <?php }else{ ?>
            <li class="drop-down"><a href="#"><?= $this->session->userdata('nama_depan')?></a>
              <ul>
                <li><a href="<?= base_url('detail-berkas')?>">Registration Form</a></li>
                <!-- <li><a href="<?= base_url('riwayat-pendaftaran')?>">Riwayat Pendaftaran</a></li> -->
                <li><a href="<?= base_url('cetak-berkas')?>">Print Cards</a></li>
                <li><a href="<?= base_url('logout')?>">Logout</a></li>
              </ul>
            </li>
          <?php }?>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
      

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
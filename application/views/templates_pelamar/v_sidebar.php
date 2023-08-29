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
          <!-- <li><a href="<?= base_url()?>#about">About</a></li> -->
          <li><a href="<?= base_url('find-job')?>">Lowongan</a></li>
          <li><a href="<?= base_url()?>#services">Instruction</a></li>
          <li><a href="<?= base_url()?>#services">Lamaran</a></li>
          <li><a href="<?= base_url()?>#portfolio">Gallery</a></li>
          <li><a href="<?= base_url()?>#blog">Information</a></li>
          <!-- <li><a href="<?= base_url()?>#hasil">Hasil</a></li> -->
          <li><a href="<?= base_url()?>#contact">Contact</a></li>
          <?php if($this->session->userdata('id_pengguna') == ''){ ?>
            <li><a href="<?= base_url('login-pelamar')?>">Login</a></li>
          <?php }else{ ?>
            <li class="drop-down"><a href="#"><?= $this->session->userdata('nama_depan')?></a>
              <ul>
                <li><a href="<?= base_url('profile')?>">Profile</a></li>
                <li><a href="<?= base_url('logout')?>">Logout</a></li>
              </ul>
            </li>
          <?php }?>
        

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
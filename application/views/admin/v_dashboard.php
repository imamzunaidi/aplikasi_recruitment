<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1><?= $title?></h1>
        </div>

        <div class="section-body">
            <?php 
                if($this->session->userdata('hak_akses') == '1'){?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Hallo !!</strong> Selamat Datang Admin
                    </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?= base_url('data-pendaftaran')?>">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Jumlah Pendaftar</h4>
                        </div>
                        <div class="card-body">
                        
                        </div> </a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <a href="<?= base_url('data-pesan')?>">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Data Kontak</h4>
                        </div>
                        <div class="card-body">
                           
                        </div>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <a href="<?= base_url('laporan-keterima')?>">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Data Pelamar Keterima</h4>
                        </div>
                        <div class="card-body">
                           
                        </div>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <a href="<?= base_url('laporan-ketolak')?>">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Jumlah Pelamar Ketolak</h4>
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
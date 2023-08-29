<main>

<div id="" class="services-area area-padding">
    <div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
                <h2>Detail Data Lowongan</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <h5>Detail Data Lowongan</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-lg-8">
                    
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="<?= base_url()?>assets/img/lowongan/<?= $detail_lowongan->gambar_lowongan?>" width = "100%" alt=""></a>
                        </div>
                            
                    </div>
                    <!-- job single End -->
                    <br>
                    <div class="job-post-details">
                        
                       
                    
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Job Overview</h4>
                    </div>
                    <ul>
                        <li>Posted date : <span><?= $detail_lowongan->tanggal_dibuat?></span></li>
                        <li>Location : <span><?= $detail_lowongan->penempatan?></span></li>
                        <li>Job nature : <span><?= $detail_lowongan->jenis_pekerjaan?></span></li>
                        <li>Salary :  <span><?= $detail_lowongan->gaji?></span></li>
                        <li>Application date : <span><?= $detail_lowongan->batas_pendaftaran?></span></li>
                    </ul>
                    <br>
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Detail</h4>
                        </div>
                        <p><?= $detail_lowongan->deskripsi?></p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <?= $detail_lowongan->requirment?>
                    
                    </div>
                </div>
                    
                <div class="col-md-12">
                    <div class="text-right">
                        <?php if($jumlah_berkas > 0){ ?>
                            <a href="<?= base_url('pelamar/Data_applay/applay_lowongan/'.$detail_lowongan->id_lowongan)?>" class="btn btn-primary">Applay Now</a>
                        <?php }else{ ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Appaly Now
                            </button>
                        <?php } ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div><!-- End Services Section -->

</main>

 <!-- The Modal -->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Upload Kelengkapan Berkas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('pelamar/Data_applay/applay_lowongan_cv')?>" method="post" enctype='multipart/form-data'>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">KTP</label>
                        <input type="hidden" name = "id_lowongan" value = "<?= $detail_lowongan->id_lowongan?>">
                        <input type="file" class = "form-control" required name = "ktp">
                    </div>
                    <div class="form-group">
                        <label for="">KK</label>
                        <input type="file" class = "form-control" required name = "kk">
                    </div>
                    <div class="form-group">
                        <label for="">Cv (Curiculum Vitae)</label>
                        <input type="file" class = "form-control" required name = "cv">
                    </div>
                    <div class="form-group">
                        <label for="">Ijasah Pendidikan Terakhir</label>
                        <input type="file" class = "form-control" required name = "ijasah">
                    </div>
                    <div class="form-group">
                        <label for="">Motivasi Melamar Kerja</label>
                        <textarea name="motivasi_melamar" id="" cols="30" rows="3" class = "form-control" required></textarea>
                    </div>
                    
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class = "btn btn-primary">Applay</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
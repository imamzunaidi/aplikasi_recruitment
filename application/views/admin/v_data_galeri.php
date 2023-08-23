
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
    </div>

    <div class="section-body">
      <div class="card">
      <?php echo $this->session->flashdata('pesan')?>
      <div class="card-body">
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        <div class="row">
        
          <?php foreach ($galeri as $key => $value) {?>
                    
            <div class="col-md-4">
              <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="<?= base_url('assets/img/galeri/'.$value->galeri_gambar)?>" alt="Card image" style="width:100%" height ="280px">
                <div class="card-img-overlay">
                  <!-- <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p> -->
                  <button data-toggle="modal" data-target="#edit<?=$value->kd_galeri?>" class = "btn btn-light btn-sm"><i class ="fas fa-edit"></i></button>
                  <a href="<?= base_url('admin/data_galeri/delete/'.$value->kd_galeri)?>" class="btn btn-sm btn-primary"><i class = "fas fa-trash"></i></a>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambahkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_galeri/insert')?>" method = "POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class = "form-control" name = "gambar" id="gambar" required>
          </div>
          <!-- <div id="image_demo" class="d-none"></div> -->
          <div class="modal-footer br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


<?php foreach ($galeri as $key => $glr) { ?>
<div class="modal fade" tabindex="-1" role="dialog" id="edit<?=$glr->kd_galeri ?>">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_galeri/update/'.$glr->kd_galeri)?>" method = "POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="hidden" name = "kd_galeri" value = "<?= $glr->kd_galeri?>">
            <input type="file" class = "form-control" name = "gambar" id="lihat_gambar">
          </div>
          <!-- <div id="image_demo" class="d-none"></div> -->
          <div class="modal-footer br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<?php }?>

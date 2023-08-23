<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
        <table class="table table-hover" id="basic-datatables">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <?php if($this->session->userdata('hak_akses') == 'admin'){ ?>
                        <th class ="text-center">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                      foreach ($data_alur as $key => $value) :?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->judul?></td>
                        <td><?= $value->deskripsi?></td>
                        <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/alur/<?= $value->gambar_alur?>" alt="" width ="90%"></td>
                        <?php if($this->session->userdata('hak_akses') == 'admin'){ ?>
                          <td class ="text-center"> 
                            <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#updatedata<?= $value->kd_alur ?>">
                              <i class="fas fa-edit"></i>
                            </button>
                            <a href="<?= base_url('admin/data_alur/delete/' . $value->kd_alur) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                          </td>
                        <?php } ?>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
        </div>
      </div>
    </div>
  </section>
</div>

                
<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_alur/insert') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
          <div class="form-group">
            <label for="">judul</label>
            <input type="text" name="judul" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi" id="" cols="30" rows="10" class = "form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="gambar" id="" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $no = 1;
foreach ($data_alur as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->kd_alur?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_alur/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <input type="hidden" name="kd_alur" id="" class="form-control" value = "<?= $value->kd_alur ?>">
            <div class="form-group">
                <label for="">judul</label>
                <input type="text" name="judul" id="" class="form-control" required value = "<?= $value->judul?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10" class = "form-control" required value = "<?= $value->deskripsi?>"><?= $value->deskripsi?></textarea>
            </div>
            <div class="form-group">
              <label for="">Gambar</label>
              <input type="file" name="gambar" id="" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
  </div>
</div>
<?php endforeach; ?>

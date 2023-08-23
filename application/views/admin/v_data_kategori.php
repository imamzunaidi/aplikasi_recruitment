<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php if($this->session->userdata('hak_akses') == 'admin'){?> 
      <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata">
        Tambah Data
      </button>
    <?php } ?>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <?php if($this->session->userdata('hak_akses') == 'admin'){?>
                <th class ="text-center">Action</th>
                <?php }?>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_kategori as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama_kategori ?></td>
                  <?php if($this->session->userdata('hak_akses') == 'admin'){?>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_kategori ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('admin/data_kategori/delete/' . $value->id_kategori) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                  </td>
                  <?php }?>
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
      <form action="<?= base_url('admin/data_kategori/insert') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="" class="form-control" required>
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
foreach ($data_kategori as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_kategori?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_kategori/update') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="hidden" name ="id_kategori" value ="<?= $value->id_kategori?>">
            <input type="text" name="nama_kategori" id="" class="form-control" required value = "<?= $value->nama_kategori?>">
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

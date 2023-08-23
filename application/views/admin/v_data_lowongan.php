
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
                <th>Gambar</th>
                <th>Nama Kategori</th>
                <th>Nama Pekerjaan</th>
                <th>Batas Pendaftaran</th>
                <th>Deskripsi</th>
                <th>Penempatan</th>
                <th>Gaji</th>
                <th class ="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_lowongan as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/lowongan/<?= $value->gambar_lowongan?>" alt="" width ="90%"></td>
                  <td><?= $value->nama_kategori ?></td>
                  <td><?= $value->nama_pekerjaan ?></td>
                  <td><?= $value->batas_pendaftaran ?></td>
                  <td><?= $value->deskripsi?></td>
                  <td><?= $value->penempatan?></td>
                  <td><?= $value->gaji?></td>
                
                  <td class ="text-center"> 
                    <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Detaildata<?= $value->id_lowongan ?>">
                      <i class="fas fa-eye"></i>
                    </button> -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_lowongan ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('admin/data_lowongan/delete/' . $value->id_lowongan) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                  </td>
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
      <form action="<?= base_url('admin/data_lowongan/insert') ?>" method="post" enctype='multipart/form-data'> 
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Pekerjaan</label>
            <input type="text" name = "nama_pekerjaan" class = "form-control" required>
          </div>
          <div class="form-group">
            <label for="">Jenis Pekerjaan</label>
            <input type="text" name = "jenis_pekerjaan" class = "form-control" required>
          </div>
          <div class="form-group">
            <label for="">Nama Kategori</label>
            <select name="id_kategori" class = "form-control" id="" required>
              <option value = "">--Pilih Kategori--</option>
              <?php foreach ($data_kategori as $key => $value) { ?>
                <option value="<?= $value->id_kategori?>"><?= $value->nama_kategori?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Penempatan</label>
            <input type="text" name = "penempatan" class = "form-control" required>
          </div>
          <div class="form-group">
            <label for="">Batas Pendaftaran</label>
            <input type="date" name = "batas_pendaftaran" class ="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Gaji</label>
            <input type="text" name = "gaji" class ="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Kebutuhan</label>
            <input type="text" name = "jumlah_kebutuhan" class ="form-control" required>
          </div>
          <div class="form-group">
            <label for="">deskripsi</label>
            <textarea name="deskripsi" class ="form-control" required id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="">Requirment</label>
            <textarea name="requirment" class = "form-control summernote" cols="30" rows="10" required></textarea>
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name = "gambar" class = "form-control" required>
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
</div>

<?php $no = 1;
foreach ($data_lowongan as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_lowongan?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_lowongan/update') ?>" method="post"  enctype='multipart/form-data'>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Pekerjaan</label>
            <input type="hidden" name = "id_lowongan" value = "<?= $value->id_lowongan?>">
            <input type="text" name = "nama_pekerjaan" class = "form-control" required value = "<?= $value->nama_pekerjaan?>">
          </div>
          <div class="form-group">
            <label for="">Nama Kategori</label>
            <select name="id_kategori" class = "form-control" id="" required>
              <option value = "<?= $value->id_kategori?>"><?= $value->nama_kategori?></option>
              <?php foreach ($data_kategori as $k) { ?>
                <option value="<?= $k->id_kategori?>"><?= $k->nama_kategori?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Penempatan</label>
            <input type="text" name = "penempatan" class = "form-control" required value = "<?= $value->penempatan?>">
          </div>
          <div class="form-group">
            <label for="">Batas Pendaftaran</label>
            <input type="date" name = "batas_pendaftaran" class ="form-control" required  value = "<?= $value->batas_pendaftaran?>">
          </div>
          <div class="form-group">
            <label for="">Gaji</label>
            <input type="text" name = "gaji" class ="form-control" required value = "<?= $value->gaji?>">
          </div>
          <div class="form-group">
            <label for="">Kebutuhan</label>
            <input type="text" name = "jumlah_kebutuhan" class ="form-control" required value = "<?= $value->jumlah_kebutuhan?>">
          </div>
          <div class="form-group">
            <label for="">Jenis Pekerjaan</label>
            <input type="text" name = "jenis_pekerjaan" class = "form-control" required value = "<?= $value->jenis_pekerjaan?>">
          </div>
          <div class="form-group">
            <label for="">deskripsi</label>
            <textarea name="deskripsi" class ="form-control" required id="" cols="30" rows="10" value = "<?= $value->deskripsi?>"><?= $value->deskripsi?></textarea>
          </div>
          <div class="form-group">
            <label for="">Requirment</label>
            <textarea name="requirment" class = "form-control summernote" cols="30" rows="10" required><?= $value->requirment?></textarea>
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="gambar" class = "form-control">
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

<script>
 

  $('.summernote').summernote({
    placeholder: 'Tuliskan Requirement Yang Dibutuhkan',
    tabsize: 2,
    height: 100,
    toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
        ]
  });
</script>
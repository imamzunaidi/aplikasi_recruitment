<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <table class = "table table-hover table-striped" id = "basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Kelas</th>
                        <th>Status Berkas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_pendaftar as $key => $value) { ?>
                        <tr>
                            <td><?= $no++?></td>

                            <td><?= $value->nama_lengkap?></td>
                            <td><?= $value->tempat_lahir?>, <?= $value->tgl_lahir?></td>
                            <td><?= $value->tgl_submit?></td>
                            <td><?= $value->kelas_siswa?></td>
                            <td><?= $value->status_siswa?></td>
                            <td>
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_berkas_siswa ?>">
                                <i class="fas fa-edit"></i>
                              </button>
                                <a href="<?= base_url('admin/data_pendaftar/detail/'.$value->id_berkas_siswa)?>" class = "btn btn-info btn-sm"><i class = "fas fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $no = 1;
foreach ($data_pendaftar  as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_berkas_siswa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_pendaftar/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <div class="form-group">
              <label for="">Kelas Siswa</label>
              <input type="text" name = "kelas_siswa" class = "form-control" required>
            </div>
            <div class="form-group">
              <input type="hidden" name="id_berkas_siswa" id="" class="form-control" value = "<?= $value->id_berkas_siswa ?>">
              <label for="">Status</label>
              <select name="status_siswa" id="" class = "form-control">
                <option value="diterima">Diterima</option>
                <option value="ditolak">Ditolak</option>
              </select>
            </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
  </div>
</div>
<?php endforeach; ?>


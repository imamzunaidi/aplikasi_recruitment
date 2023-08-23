<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama </th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Username</th>
                <th>status</th>
                <?php if($this->session->userdata('hak_akses') == 'admin'){ ?>
                <th class ="text-center">Action</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_pelamar as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama_pelamar?></td>
                  <td><?= $value->no_telp_pelamar?></td>
                  <td><?= $value->alamat_pelamar?></td>
                  <td><?= $value->email_pelamar?></td>
                  <td><?= $value->username_pelamar?></td>
                  <td><?= $value->status_pelamar?></td>
                  <?php if($this->session->userdata('hak_akses') == 'admin'){ ?>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_pelamar ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('admin/data_pelamar/delete/' . $value->id_pelamar) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

<?php $no = 1;
foreach ($data_pelamar as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_pelamar?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_pelamar/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <input type="hidden" name="id_pelamar" id="" class="form-control" value = "<?= $value->id_pelamar ?>" required>
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama_pelamar" id="" class="form-control" value = "<?= $value->nama_pelamar ?>" required>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email_pelamar" id="" class="form-control" value = "<?= $value->email_pelamar ?>" required>
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username_pelamar" id="" class="form-control" value = "<?= $value->username_pelamar ?>" required>
            </div>
            <div class="form-group">
              <label for="">No Telp</label>
              <input type="text" name="no_telp_pelamar" id="" class="form-control" value = "<?= $value->no_telp_pelamar ?>" required>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat_pelamar" id="" class="form-control" value = "<?= $value->alamat_pelamar ?>" required>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password_pelamar" id="" class="form-control" required>
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

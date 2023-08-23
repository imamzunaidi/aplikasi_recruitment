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
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>alamat_users</th>
                <th class ="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_admin as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama_users?></td>
                  <td><?= $value->username?></td>
                  <td><?= $value->no_telp_users?></td>
                  <td><?= $value->email_users?></td>
                  <td><?= $value->alamat_users?></td>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_users ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('admin/data_admin/delete/' . $value->id_users) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('admin/data_admin/insert') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama_users" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email_users" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">No Telepon</label>
            <input type="number" name="no_telp_users" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat_users" id="" class="form-control" required>
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
foreach ($data_admin as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_users?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_admin/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <input type="hidden" name="id_users" id="" class="form-control" value = "<?= $value->id_users ?>">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama_users" id="" class="form-control" value = "<?= $value->nama_users ?>">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email_users" id="" class="form-control" required value = "<?= $value->email_users ?>">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" id="" class="form-control" value = "<?= $value->username ?>">
            </div>
            <div class="form-group">
              <label for="">No Telepon</label>
              <input type="text" name="no_telp_users" id="" class="form-control" value = "<?= $value->no_telp_users ?>">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat_users" id="" class="form-control" value = "<?= $value->alamat_users ?>">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" required>
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

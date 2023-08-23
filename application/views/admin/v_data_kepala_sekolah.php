<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <form action="<?= base_url('admin/data_kepala_sekolah/update')?>" method = "POST"  enctype='multipart/form-data'>
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Sekolah</label>
                            <input type="hidden" name = "id_users" value = "<?= $data_kepala_sekolah->id_users?>">
                            <input type="text" name ="nama_users" class = "form-control" value = "<?= $data_kepala_sekolah->nama_users?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name = "alamat_users" class = "form-control" value = "<?= $data_kepala_sekolah->alamat_users?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name = "email_users" class = "form-control" value = "<?= $data_kepala_sekolah->email_users?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name = "no_telp_users" class = "form-control" value = "<?= $data_kepala_sekolah->no_telp_users?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name = "username" class = "form-control" value = "<?= $data_kepala_sekolah->username?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name = "password" class = "form-control" value = "" required>
                        </div>
                        <div class="text-right">
                            <button type = "submit" class = "btn btn-primary">Update Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>
</div>

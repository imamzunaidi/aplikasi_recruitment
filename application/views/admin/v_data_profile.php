<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <form action="<?= base_url('admin/data_profile_sekolah/update')?>" method = "POST"  enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center"><h3>Gambar Sekolah</h3></div>
                        <img src="<?= base_url('assets/img/profile_sekolah/'.$profile_sekolah->gambar_sekolah)?>" alt="" width = "100%">
                        <div class="form-group text-center">
                            <label for="">Upload Gambar</label>
                            <input type="file" class = "form-control" name = "gambar">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Nama Sekolah</label>
                            <input type="hidden" name = "kd_profile_sekolah" value = "1">
                            <input type="text" name ="nama_sekolah" class = "form-control" value = "<?= $profile_sekolah->nama_sekolah?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Visi</label>
                            <input type="text" name = "visi" class = "form-control" value = "<?= $profile_sekolah->visi?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Misi</label>
                            <input type="text" name = "misi" class = "form-control" value = "<?= $profile_sekolah->misi?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name = "email" class = "form-control" value = "<?= $profile_sekolah->email?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name = "no_hp" class = "form-control" value = "<?= $profile_sekolah->no_hp?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" name = "facebook" class = "form-control" value = "<?= $profile_sekolah->facebook?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" name = "instagram" class = "form-control" value = "<?= $profile_sekolah->instagram?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name = "alamat" class = "form-control" value = "<?= $profile_sekolah->alamat?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class = "form-control" value = "<?= $profile_sekolah->deskripsi?>" cols="30" rows="10" required><?= $profile_sekolah->deskripsi?></textarea>
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

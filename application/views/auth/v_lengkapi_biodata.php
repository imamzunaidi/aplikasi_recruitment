<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SMA MUHAMMADIYAH 1 PEKANBARU </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url()?>/node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/components.css">
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <h2>Lengkapi Biodata Terlebih Dahulu</h2>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Lengkapi Biodata</h4></div>

              <div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
                <form method="POST" action = "<?= base_url('auth/proses_lengkapi_biodata')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="hidden" name = "kd_siswa_baru" value = "<?= $this->session->userdata('kd_siswa_baru')?>">
                      <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap"required>
                      <?php echo form_error('nama_lengkap','<div class ="text-small text-danger">','</div>')?>
                    </div>
                    <div class="form-group col-6">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" required>
                      <?php echo form_error('tempat_lahir','<div class ="text-small text-danger">','</div>')?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat" required>
                    <?php echo form_error('alamat','<div class ="text-small text-danger">','</div>')?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" required>
                    <?php echo form_error('asal_sekolah','<div class ="text-small text-danger">','</div>')?>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="asal_sekolah">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class = "form-control" id="" required>
                      <option>--Pilih Jenis Kelamin--</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>

                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" required>
                        <?php echo form_error('tgl_lahir','<div class ="text-small text-danger">','</div>')?>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="no_hp">No Telepon</label>
                        <input id="no_hp" type="number" class="form-control" name="no_hp" required>
                        <?php echo form_error('no_hp','<div class ="text-small text-danger">','</div>')?>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama_ayah" class="d-block">Nama Ayah</label>
                      <input id="nama_ayah" type="text" class="form-control pwstrength" data-indicator="pwindicator" name="nama_ayah" required>
                      <?php echo form_error('nama_ayah','<div class ="text-small text-danger">','</div>')?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="nama_ibu" class="d-block">Nama Ibu</label>
                      <input id="nama_ibu" type="text" class="form-control" name="nama_ibu" required>
                      <?php echo form_error('ulangi_password','<div class ="text-small text-danger">','</div>')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_hp_orangtua">No HP Orang Tua</label>
                    <input id="no_hp_orangtua" type="number" class="form-control" name="no_hp_orangtua" required>
                    <?php echo form_error('no_hp_orangtua','<div class ="text-small text-danger">','</div>')?>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">Saya Setuju dengan data diatas</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Lengkapi Data
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SMA Muhammadiyah Pekan baru
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url()?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url()?>/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url()?>/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url()?>/assets/js/scripts.js"></script>
  <script src="<?= base_url()?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url()?>/assets/js/page/auth-register.js"></script>
</body>
</html>
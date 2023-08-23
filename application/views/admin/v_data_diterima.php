<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
        <!-- <div class="card table-responsive">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                    <form action="<?= base_url('admin/data_keterima/filter')?>" method = "POST">
                        <div class="form-group">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name = "dari_tanggal" class = "form-control" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Sampai Tanggal</label>
                            <input type="date" name = "sampai_tanggal" class = "form-control" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <button type = "submit" class = "btn btn-primary mt-2">Filter</button>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <a href="<?= base_url('laporan-keterima')?>" class = "btn btn-danger mt-2">Reset</a>
                    </div>
                    </form>
                </div>
            </div>
      </div> -->
      <div class="card table-responsive">
        <div class="card-body ">
            <table class = "table table-hover table-striped" id = "basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>Nik Anak</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Nik Ayah</th>
                        <th>Nik Ibu</th>
                        <th>Kelas Siswa</th>
                       
                        <th>Status Berkas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_diterima as $key => $value) { ?>
                        <?php 
                        $tanggal = new DateTime($value->tgl_lahir); 
                        $today = new DateTime('today');
                        $y = $today->diff($tanggal)->y;
                        ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value->nama_lengkap?></td>
                            <td><?= $value->tempat_lahir?></td>
                            <td><?= $value->tgl_lahir?></td>
                            <td><?= $value->kelurahan?> <?= $value->kecamatan?> <?= $value->kabupaten?></td>
                            <td><?= $y?> Tahun</td>
                            <td><?= $value->nik?></td>
                            <td><?= $value->nama_ayah?></td>
                            <td><?= $value->nama_ibu_kandung?></td>
                            <td><?= $value->nik_ayah?></td>
                            <td><?= $value->nik_ibu?></td>
                            <td><?= $value->kelas_siswa?></td>
                            <td><?= $value->status_siswa?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>




<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-header">
            <h4><?= $title?></h4>
        </div>
        <div class="card-body ">
            <table class = "table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Tanggal Approve</th>
                        <th>Proses Lamaran</th>
                        <th>Status Lamaran</th>
                        <th>Skors</th>
                        <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($data_seleksi_administrasi as $value){ ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value->nama_pelamar?></td>
                            <td><?= $value->nama_pekerjaan?></td>
                            <td><?= $value->tanggal_approve?></td>
                            <td><?= $value->proses?></td>
                            <td><?= $value->detail_status_lamaran?></td>
                            <td>
                            <?php $total =0; foreach ($data_hasil_test as $test) {  ?>
                                <?php if ($test->id_pelamar == $value->id_pelamar AND $test->id_applay_lowongan == $value->id_applay_lowongan  ) { ?>
                                    <?php if ($test->status_jawaban == 'true') { 
                                        $total+=1;
                                    } ?>
                                <?php } ?>
                            <?php } ?>
                            <?= $total * 5?>
                            </td>
                            <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Update<?= $value->id_applay_lowongan ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('admin/data_test_tulis/detail/'.$value->id_applay_lowongan.'/'.$value->id_pelamar)?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
         
        </div>
      </div>
      <div class="card table-responsive">
        <div class="card-header">
            <h4>Hasil <?= $title?></h4>
        </div>
        <div class="card-body ">
            <table class = "table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Tanggal Approve</th>
                        <th>Proses Lamaran</th>
                        <th>Status Lamaran</th>
                        <th>Skors</th>
                        <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($data_test_tulis as $value){ ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value->nama_pelamar?></td>
                            <td><?= $value->nama_pekerjaan?></td>
                            <td><?= $value->tanggal_approve?></td>
                            <td><?= $value->proses?></td>
                            <td><?= $value->detail_status_lamaran?></td>
                            <td>
                            <?php $total =0; foreach ($data_hasil_test as $test) {  ?>
                                <?php if ($test->id_pelamar == $value->id_pelamar AND $test->id_applay_lowongan == $value->id_applay_lowongan  ) { ?>
                                    <?php if ($test->status_jawaban == 'true') { 
                                        $total+=1;
                                    } ?>
                                <?php } ?>
                            <?php } ?>
                            <?= $total * 5?>
                            </td>
                            <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                            <td>
                                <a href="<?= base_url('admin/data_test_tulis/detail/'.$value->id_applay_lowongan.'/'.$value->id_pelamar)?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
         
        </div>
      </div>
    </div>
  </section>
</div>


<?php $no = 1; foreach($data_test_tulis as $value){ ?>
<div class="modal fade" id="Detail<?= $value->id_applay_lowongan?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <h4 class="modal-title">Detail Berkas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
                <div class="modal-body">
                    <div class="form-group">
                        <label for=""> Data KTP</label>
                        <br>
                        <a href="<?= base_url('assets/img/ktp/'.$value->ktp)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                    <div class="form-group">
                        <label for="">Data KK</label>
                        <br>
                        <a href="<?= base_url('assets/img/kkk/'.$value->kk)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                    <div class="form-group">
                        <label for="">Data Cv (Curiculum Vitae)</label>
                        <br>
                        <a href="<?= base_url('assets/img/cv/'.$value->cv)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                    <div class="form-group">
                        <label for="">Data Ijasah</label>
                        <br>
                        <a href="<?= base_url('assets/img/ijasah/'.$value->ijasah)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                    <div class="form-group">
                        <label for="">Motivasi Melamar Kerja</label>
                        <textarea name="motivasi_melamar" id="" cols="30" rows="3" class = "form-control" required><?= $value->motivasi_melamar?></textarea>
                    </div>    
                </div>
                
                <div class="modal-footer">
                    <!-- <button type="submit" class = "btn btn-primary">Applay</button> -->
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

        </div>
    </div>
</div>
<?php } ?>




<?php $no = 1; foreach($data_seleksi_administrasi as $value){ ?>
<div class="modal fade" id="Update<?= $value->id_applay_lowongan?>">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <h4 class="modal-title"><?= $title?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('admin/data_test_tulis/update')?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name = "id_applay_lowongan" value = "<?= $value->id_applay_lowongan?>">
                        <label for="">Status Lamaran</label>
                        <select name="status_lamaran" class = "form-control" id="" required>
                            <option value = "lolos">Lolos</option>
                            <option value = "tidak lolos">Tidak lolos</option>
                        </select>
                    </div>  
                    <?php $total =0; foreach ($data_hasil_test as $test) {  ?>
                        <?php if ($test->id_pelamar == $value->id_pelamar AND $test->id_applay_lowongan == $value->id_applay_lowongan  ) { ?>
                            <?php if ($test->status_jawaban == 'true') { 
                                $total+=1;
                            } ?>
                        <?php } ?>
                    <?php } ?>
                    <div class="form-group">
                        <label for="">Nilai</label>
                        <input type="number" class = "form-control" required name = "nilai" value = "<?= $total*5?>" readonly>
                    </div>    
                    <div class="form-group">
                        <label for="">Keterangan Tambahan</label>
                        <textarea name="keterangan_tambahan" class = "form-control" required id="" cols="30" rows="10"></textarea>
                    </div>        
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class = "btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>
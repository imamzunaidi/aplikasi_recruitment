<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card">
          <div class="card-header">
              <h4>Data Pelamar</h4>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Nama Pelamar</label>
                          <input type="text" name = "nama_pertanyaan" class = "form-control" readonly value = "<?= $data_applay->nama_pelamar?>">
                      </div>
                      <div class="form-group">
                          <label for="">No Telp</label>
                          <input type="text" name = "nama_pertanyaan" class = "form-control" readonly value = "<?= $data_applay->no_telp_pelamar?>">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Alamar Pelamar</label>
                          <input type="text" name = "nama_pertanyaan" class = "form-control" readonly value = "<?= $data_applay->alamat_pelamar?>">
                      </div>
                      <div class="form-group">
                          <label for="">Email Pelamar</label>
                          <input type="text" name = "nama_pertanyaan" class = "form-control" readonly value = "<?= $data_applay->email_pelamar?>">
                      </div>
                  </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> Data KTP</label>
                        <br>
                        <a href="<?= base_url('assets/img/ktp/'.$data_applay->ktp)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Data KK</label>
                        <br>
                        <a href="<?= base_url('assets/img/kkk/'.$data_applay->kk)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                   
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Data Cv (Curiculum Vitae)</label>
                        <br>
                        <a href="<?= base_url('assets/img/cv/'.$data_applay->cv)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                   
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Data Ijasah</label>
                        <br>
                        <a href="<?= base_url('assets/img/ijasah/'.$data_applay->ijasah)?>" class = "btn btn-primary" target = "_BLANK">Download</a>
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="card table-responsive">
        <div class="card-header">
            <h4>Hasil Test Tulis</h4>
        </div>
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th class = "text-center">Nilai</th>
  
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; $total =0; foreach ($data_hasil_test as $key => $value) {  ?>
                <?php if ($value->status_jawaban == 'true') { 
                  $total+=1;
                 } ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $value->nama_pertanyaan?></td>
                  <td><?= $value->jawaban?></td>
                  <td class = "text-center">
                    <?php if ($value->status_jawaban == 'true') { ?>
                      5
                    <?php }else{ ?>
                      0
                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>

            </tbody>
            <tfoot>
              <tr class = "text-center">
                <th colspan = "3">Skors Benar</th>
                <th><?= $total * 5?></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card table-responsive">
        <div class="card-header">
            <h4>Hasil Test Fisik</h4>
        </div>
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Proses</th>
                <th>Nilai</th>
  
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Hasl Test Fisik</td>
                <td><?= $data_hasil_test_fisik->nilai?></td>
              </tr>
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </section>
</div>






<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="<?= base_url('admin/data_tidak_lolos/cetak')?>" class = "btn btn-primary mb-3"><i class = "fas fa-print"></i> Cetak</a>
        </div>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <table class = "table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Tanggal Applay</th>
                        <th>Status Lamaran</th>
                        <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($data_tidak_lolos as $value){ ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value->nama_pelamar?></td>
                            <td><?= $value->nama_pekerjaan?></td>
                            <td><?= $value->tanggal_pendaftar?></td>
                            <td><?= $value->status_lamaran?></td>
                            <?php if($this->session->userdata('hak_akses') == 'hrd'){ ?>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Detail<?= $value->id_applay_lowongan ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>

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

<div class="blog-page area-padding">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="text-center"><h2>HASIL PENDAFTARAN</h2></div>
                    <hr>
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
                                <td class = "text-centers">
                                    <a href="<?= base_url('calon/data_detail_berkas/detail_cetak/'.$value->id_berkas_siswa)?>" class = "btn btn-info btn-sm"><i class = "fas fa-eye"></i></a>
                                    <a href="<?= base_url('calon/data_detail_berkas/cetak/'.$value->id_berkas_siswa)?>" class = "btn btn-warning btn-sm" target = "_BLANK"><i class = "fas fa-print"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
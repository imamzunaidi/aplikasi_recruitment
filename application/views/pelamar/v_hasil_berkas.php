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
                                <td>No</td>
                                <td>Nama Lengkap</td>
                                <td>Jenis Kelamin</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>Tanggal Pengajuan</td>
                                <td>Jurusan</td>
                                <td>Status Berkas</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($detail as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $value->nama_lengkap?></td>
                                    <td><?= $value->jenis_kelamin?></td>
                                    <td><?= $value->tempat_lahir?>, <?= $value->tgl_lahir?></td>
                                    <td><?= $value->tgl_pendaftaran?></td>
                                    <td><?= $value->nama_jurusan?></td>
                                    <td><?= $value->status_pendaftaran?></td>
                                    <td>
                                        <a href="<?= base_url('calon/data_detail_berkas/detail/'.$value->kd_pendaftaran)?>" class = "btn btn-info btn-sm"><i class = "fas fa-eye"></i></a>
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
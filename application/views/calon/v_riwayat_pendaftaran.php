<div class="blog-page area-padding">
    <div class="container">
        <div class="card mt-5 table-responsive">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="text-center"><h2>HASIL PENDAFTARAN</h2></div>
                    <hr>
                    <table class = "table table-hover table-striped" id = "basic-datatables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Status Siswa</th>
                                <th>Nik Anak</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Nik Ayah</th>
                                <th>Nik Ibu</th>
                                <th>Kelas Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_pendaftar as $key => $value) { ?>
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
                                    <td><?= $value->status_siswa?></td>
                                    <td><?= $value->nik?></td>
                                    <td><?= $value->nama_ayah?></td>
                                    <td><?= $value->nama_ibu_kandung?></td>
                                    <td><?= $value->nik_ayah?></td>
                                    <td><?= $value->nik_ibu?></td>
                                    <td><?= $value->kelas_siswa?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Blog Page -->
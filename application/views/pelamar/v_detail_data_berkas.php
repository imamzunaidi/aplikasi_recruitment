<div class="blog-page area-padding">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="text-center"><h2>BERKAS PENDAFTARAN</h2></div>
                    <hr>
                    <form action="<?= base_url('calon/data_detail_berkas/proses_pendaftaran')?>" method = "POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <label for=""><h3>Pas Foto</h3></label>
                                    <img src="<?= base_url('assets/img/berkas_pas_foto/'.$detail->pas_foto)?>" alt="" width = "100%" >
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->nama_lengkap?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Tempat, Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->tempat_lahir?>, <?=  $detail->tgl_lahir?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->jenis_kelamin?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->email?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">No Telepon</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->no_hp?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Alamat</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->alamat?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Asal Sekolah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->asal_sekolah?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Nama Ayah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->nama_ayah?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Nama Ibu</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->nama_ibu?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">No Telepon Orang Tua</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->no_hp_orangtua?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Jurusan yang diminati</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->nama_jurusan?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->status_pendaftaran?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Tanggal Pendaftaran</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->tgl_pendaftaran?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Berkas Ijasah</label>
                                    </div>
                                    <div class="col-md-7">
                                        <a href="<?= base_url('assets/img/berkas_pelamar/'.$detail->ijasah)?>" target = "_BLANK" download><img src="<?= base_url('assets/img/pdf.jpg')?>" class="img-fluid" alt="" width = "25%"></a>
                                        <label for="">Klik Gambar Pdf Untuk Mendownload Data </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Berkas Rekap Nilai</label>
                                    </div>
                                    <div class="col-md-7">
                                        <a href="<?= base_url('assets/img/rekap_nilai/'.$detail->rekap_nilai)?>" target = "_BLANK" download><img src="<?= base_url('assets/img/pdf.jpg')?>" class="img-fluid" alt="" width = "25%"></a>
                                        <label for="">Klik Gambar Pdf Untuk Mendownload Data </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Berkas Pendukung</label>
                                    </div>
                                    <div class="col-md-7">
                                        <a href="<?= base_url('assets/img/berkas_pendukung/'.$detail->berkas_pendukung)?>" target = "_BLANK" download><img src="<?= base_url('assets/img/pdf.jpg')?>" class="img-fluid" alt="" width = "25%"></a>
                                        <label for="">Klik Gambar Pdf Untuk Mendownload Data </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Blog Page -->
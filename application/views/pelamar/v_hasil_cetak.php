<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="blog-page area-padding">
    <div class="container">
        <div class="card shadow mt-5">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="text-center"><h2>Cetak Kartu Pendaftaran</h2></div>
                    <hr>
                    <form action="<?= base_url('calon/data_detail_berkas/proses_pendaftaran')?>" method = "POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <label for=""><h3>Pas Foto</h3></label>
                                    <img src="<?= base_url('assets/img/foto/'.$detail->foto)?>" alt="" width = "100%" >
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for=""><h4>Informasi</h4></label>
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
                                        <label for=""> : <?= $detail->tempat_lahir?>, <?= $detail->tgl_lahir?></label>
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
                                <!-- <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <label>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">No Telepon</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->no_handphone?><laabel>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Alamat</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->nama_jalan?> <?= $detail->kelurahan?> <?= $detail->kecamatan?> <?= $detail->kabupaten?>, <?= $detail->provinsi?><label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Agama</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->agama?></label>
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
                                        <label for=""> : <?= $detail->nama_ibu_kandung?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">No Telepon Orang Tua</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->no_handphone_ayah?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Kelas</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->kelas_siswa?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->status_siswa?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Tanggal Pendaftaran</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for=""> : <?= $detail->tgl_submit?></label>
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

<script type="text/javascript">
	window.print();
</script>
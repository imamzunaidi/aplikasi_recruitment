<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-header">
            <h4>Detail Pendafataran</h4>
        </div>
        <div class="card-body ">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Calon Peserta Didik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#keterangan" role="tab" aria-controls="profile" aria-selected="false">Keterangan Tambahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Lengkapi Ayah Kandung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Lengkapi Ibu Kandung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#kesanggupan" role="tab" aria-controls="contact" aria-selected="false">Surat Kesanggupan</a>
                    </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                <h6>Form Peserta Didik</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="<?= base_url('calon/Data_detail_berkas/insert')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Nama Lengkap</label>
                                                        <input type="text" name = "nama_lengkap" class = "form-control" value = "<?= $data_pendaftar->nama_lengkap?>" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="date" name = "tgl_lahir" class = "form-control" value = "<?= $data_pendaftar->tgl_lahir?>" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jenis Kelamin</label>
                                                        <input type="text" name = "jenis_kelamin" class = "form-control" value = "<?= $data_pendaftar->jenis_kelamin?>" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jumlah Anak</label>
                                                        <input type="number" name = "jumlah_anak" class = "form-control" value = "<?= $data_pendaftar->jumlah_anak?>" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Cita - Cita</label>
                                                        <input type="text" name = "cita_cita" class = "form-control" value = "<?= $data_pendaftar->cita_cita?>" required readonly>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Nik</label>
                                                        <input type="text" name = "nik" class = "form-control" required value = "<?= $data_pendaftar->nik?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" name = "tempat_lahir" class = "form-control" required value = "<?= $data_pendaftar->tempat_lahir?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Agama</label>
                                                        <input type="text" name = "agama" class = "form-control" required value = "<?= $data_pendaftar->agama?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Saudara Ke - </label>
                                                        <input type="number" name = "saudara_ke" class = "form-control" required value = "<?= $data_pendaftar->saudara_ke?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Status Tempat Tinggal</label>
                                                        <input type="text" name = "agama" class = "form-control" required value = "<?= $data_pendaftar->status_tempat_tinggal?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Provinsi</label>
                                                        <input type="text" name = "provinsi" class = "form-control" required value = "<?= $data_pendaftar->provinsi?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kabupaten/Kota</label>
                                                        <input type="text" name = "kabupaten" class = "form-control" required value = "<?= $data_pendaftar->kabupaten?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kecamatan</label>
                                                        <input type="text" name = "kecamatan" class = "form-control" required value = "<?= $data_pendaftar->kecamatan?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kelurahan/Desa</label>
                                                        <input type="text" name = "kelurahan" class = "form-control" required value = "<?= $data_pendaftar->kelurahan?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Nama Jalan</label>
                                                        <input type="text" name = "nama_jalan" class = "form-control" required value = "<?= $data_pendaftar->nama_jalan?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kode Pos</label>
                                                        <input type="number" name = "kode_pos" class = "form-control" required value = "<?= $data_pendaftar->kode_pos?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Transportasi Ke Sekolah</label>
                                                        <input type="text" name = "transportasi_sekolah" class = "form-control" value = "<?= $data_pendaftar->transportasi_sekolah?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jarak Tempat Tinggal</label>
                                                        <input type="text" name = "jarak_tempat_tinggal" class = "form-control" value = "<?= $data_pendaftar->jarak_tempat_tinggal?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Waktu Tempuh</label>
                                                        <input type="text" name = "waktu_tempuh" class = "form-control" value = "<?= $data_pendaftar->waktu_tempuh?>" readonly>
                                                    </div>
                                                </div>
                        
                                                    <div class="col-md-4">
                                                        <a href="<?= base_url('assets/img/berkas/'.$data_pendaftar->foto)?>" target = "_BLANK" download style ="width:100%" class = "btn btn-warning"><i class ="fa fa-download"></i> Download Foto</a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?= base_url('assets/img/berkas/'.$data_pendaftar->kk)?>" target = "_BLANK" download style ="width:100%" class = "btn btn-info"><i class ="fa fa-download"></i> Download KK</a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?= base_url('assets/img/berkas/'.$data_pendaftar->kk)?>" target = "_BLANK" download style ="width:100%" class = "btn btn-danger"><i class ="fa fa-download"></i> Download Akte</a>
                                                    </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                            
                                </div>
                                <div class="tab-pane fade" id="keterangan" role="tabpanel" aria-labelledby="profile-tab4">
                                    <div class="col-md-12">
                                        <h6>Keterangan Tambahan</h6>
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input type="text" name = "no_handphone" class = "form-control" required value = "<?= $data_pendaftar->no_handphone?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Yang Membiayai Sekolah</label>
                                            <input type="text" name = "yang_biayai_sekolah" class = "form-control" required value = "<?= $data_pendaftar->yang_biayai_sekolah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kebutuhan Khusus</label>
                                            <input type="text" name = "kebutuhan_khusus" class = "form-control" value = "<?= $data_pendaftar->kebutuhan_khusus?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kebutuhan Disabilitas</label>
                                            <input type="text" name = "kebutuhan_disabilitas" class = "form-control" value = "<?= $data_pendaftar->kebutuhan_disabilitas?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Masuk</label>
                                            <input type="date" name = "tgl_masuk" class = "form-control" value = "<?= $data_pendaftar->tgl_masuk?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tingkat Kelas</label>
                                            <input type="text" name = "tingkat_kelas" class = "form-control" value = "<?= $data_pendaftar->tingkat_kelas?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomer Kartu Keluarga</label>
                                            <input type="number" name = "nomer_kartu_keluarga" class = "form-control" value = "<?= $data_pendaftar->nomer_kartu_keluarga?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Kepala Keluarga</label>
                                            <input type="text" name = "nama_kepala_keluarga" class = "form-control" value = "<?= $data_pendaftar->nama_kepala_keluarga?>" required readonly>
                                        </div>   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                    <div class="col-md-12">
                                        <h6>Keterangan Orang Tua Peserta Didik (Ayah Kandung)</h6>
                                        <div class="form-group">
                                            <label for="">Nama Ayah Kandung</label>
                                            <input type="text" name = "nama_ayah" class = "form-control" required value = "<?= $data_pendaftar->nama_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" name = "nama_ayah" class = "form-control" required value = "<?= $data_pendaftar->status_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nik</label>
                                            <input type="text" name = "nik_ayah" class = "form-control" required value = "<?= $data_pendaftar->nik_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" name = "tempat_lahir_ayah" class = "form-control" required value = "<?= $data_pendaftar->tempat_lahir_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" name = "tgl_lahir_ayah" class = "form-control" required value = "<?= $data_pendaftar->tgl_lahir_ayah?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Pendidikan Terakhir</label>
                                            <input type="text" name = "pendidikan_terakhir_ayah" class = "form-control" required value = "<?= $data_pendaftar->pendidikan_terakhir_ayah?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Pekerjaan Utama</label>
                                            <input type="text" name = "pekerjaan_utama_ayah" class = "form-control" required value = "<?= $data_pendaftar->pekerjaan_utama_ayah?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Penghasilan Rata-rata</label>
                                            <input type="text" name = "penghasilan_rata_rata_ayah" class = "form-control" required value = "<?= $data_pendaftar->penghasilan_rata_rata_ayah?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input type="text" name = "no_handphone_ayah" class = "form-control" required value = "<?= $data_pendaftar->no_handphone_ayah?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Status Tempat Tinggal</label>
                                            <input type="text" name = "status_tempat_tinggal_ayah" class = "form-control" required value = "<?= $data_pendaftar->status_tempat_tinggal_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <input type="text" name = "provinsi_ayah" class = "form-control" required value = "<?= $data_pendaftar->provinsi_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kabupaten/Kota</label>
                                            <input type="text" name = "kabupaten_ayah" class = "form-control" required value = "<?= $data_pendaftar->kabupaten_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kecamatan</label>
                                            <input type="text" name = "kecamatan_ayah" class = "form-control" required value = "<?= $data_pendaftar->kecamatan_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kelurahan/Desa</label>
                                            <input type="text" name = "kelurahan_ayah" class = "form-control" required value = "<?= $data_pendaftar->kelurahan_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Jalan</label>
                                            <input type="text" name = "nama_jalan_ayah" class = "form-control" required value = "<?= $data_pendaftar->nama_jalan_ayah?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode Pos</label>
                                            <input type="number" name = "kode_pos_ayah" class = "form-control" required value = "<?= $data_pendaftar->kode_pos_ayah?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                    <div class="col-md-12">
                                        <h6>Keterangan Orang Tua Peserta Didik (Ibu Kandung)</h6>
                                        <div class="form-group">
                                            <label for="">Nama Ibu Kandung</label>
                                            <input type="text" name = "nama_ibu_kandung" class = "form-control" value = "<?= $data_pendaftar->nama_ibu_kandung?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" name = "nama_ibu_kandung" class = "form-control" value = "<?= $data_pendaftar->status_ibu_kandung?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nik</label>
                                            <input type="text" name = "nik_ibu" class = "form-control" value = "<?= $data_pendaftar->nik_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" name = "tempat_lahir_ibu" class = "form-control" value = "<?= $data_pendaftar->tempat_lahir_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" name = "tgl_lahir_ibu" class = "form-control" value = "<?= $data_pendaftar->tgl_lahir_ibu?>" required readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Pendidikan Terakhir</label>
                                            <input type="text" name = "pendidikan_terakhir_ibu" class = "form-control" value = "<?= $data_pendaftar->pendidikan_terakhir_ibu?>" required readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Pekerjaan Utama</label>
                                            <input type="text" name = "pekerjaan_utama_ibu" class = "form-control" value = "<?= $data_pendaftar->pekerjaan_utama_ibu?>" required readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Penghasilan Rata-rata</label>
                                            <input type="text" name = "penghasilan_rata_rata_ibu" class = "form-control" value = "<?= $data_pendaftar->penghasilan_rata_rata_ibu?>" required readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input type="text" name = "no_handphone_ibu" class = "form-control" value = "<?= $data_pendaftar->no_handphone_ibu?>" required readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Status Tempat Tinggal</label>
                                            <input type="text" name = "status_tempat_tinggal_ibu" class = "form-control" value = "<?= $data_pendaftar->status_tempat_tinggal_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <input type="text" name = "provinsi_ibu" class = "form-control" value = "<?= $data_pendaftar->provinsi_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kabupaten/Kota</label>
                                            <input type="text" name = "kabupaten_ibu" class = "form-control" value = "<?= $data_pendaftar->kabupaten_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kecamatan</label>
                                            <input type="text" name = "kecamatan_ibu" class = "form-control" value = "<?= $data_pendaftar->kecamatan_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kelurahan/Desa</label>
                                            <input type="text" name = "kelurahan_ibu" class = "form-control" value = "<?= $data_pendaftar->kelurahan_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Jalan</label>
                                            <input type="text" name = "nama_jalan_ibu" class = "form-control" value = "<?= $data_pendaftar->nama_jalan_ibu?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode Pos</label>
                                            <input type="number" name = "kode_pos_ibu" class = "form-control" value = "<?= $data_pendaftar->kode_pos_ibu?>" required readonly>
                                        </div>
                                    
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="kesanggupan" role="tabpanel" aria-labelledby="contact-tab4">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5>Surat Kesanggupan</h5>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Download Template Surat Keterangan :</p>

                                            <a href="<?= base_url('assets/img/berkas/'.$data_pendaftar->surat_keterangan)?>" download class = "btn btn-warning">Download Surat Keterangan</a>

                                            <div class="text-right">
                                                <button type="submit" class = "btn btn-primary mt-3">Diterima</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>  
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

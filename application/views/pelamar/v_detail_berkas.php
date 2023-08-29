
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/components.css">
    
  <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/buttons.dataTables.min.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/summernote/summernote-bs4.css'); ?>">
  
    <style>
        .form-group {
            margin-bottom: 0px;
        }

        label {
            margin-bottom: 0px;
            margin-top:5px;
        }
    </style>
    <div class="container">
        <section class="section mt-5 pt-5">
       
       <div class="section-body mt-3">
           <div class="col-md-12">
               <div class="card">
               <div class="card-header">
                   <h4>Complete the Prospective Student Data</h4>
               </div>
               <div class="card-body">
                   <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Prospective Students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#keterangan" role="tab" aria-controls="profile" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Complete Biological Father</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Complete the biological mother</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#kesanggupan" role="tab" aria-controls="contact" aria-selected="false">Willingness Letter</a>
                            </li>
                            </ul>
                        </div>
                    <div class="col-12 col-sm-12 col-md-8">
                        <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                    <h6>Student Forms</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="<?= base_url('calon/Data_detail_berkas/insert')?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Full name</label>
                                                            <input type="text" name = "nama_lengkap" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Date of birth</label>
                                                            <input type="date" name = "tgl_lahir" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Gender</label>
                                                            <select name="jenis_kelamin" class = "form-control" id="" required>
                                                                <option>--Choose Gender--</option>
                                                                <option value="Laki-laki">Man</option>
                                                                <option value="Perempuan">Woman</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Number of children</label>
                                                            <input type="number" name = "jumlah_anak" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ambition</label>
                                                            <input type="text" name = "cita_cita" class = "form-control" required>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Nik</label>
                                                            <input type="text" name = "nik" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Place of birth</label>
                                                            <input type="text" name = "tempat_lahir" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Religion</label>
                                                            <select name="agama" class = "form-control" id="" required>
                                                                <option>--Chhose Religion--</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Brother  - </label>
                                                            <input type="number" name = "saudara_ke" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Status of residence</label>
                                                            <select name="status_tempat_tinggal" class = "form-control" id="" required>
                                                                <option value="Tinggal dengan orangtua/wali">Living with parents/guardians</option>
                                                                <option value="Tinggal dengan Saudara">Live with Brother</option>
                                                                <option value="Panti Asuhan">Orphanage</option>
                                                                <option value="Rumah Singgah">Halfway house</option>
                                                                <option value="Lainnya">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Province</label>
                                                            <input type="text" name = "provinsi" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Regency/City</label>
                                                            <input type="text" name = "kabupaten" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Subdistrict</label>
                                                            <input type="text" name = "kecamatan" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ward/Village</label>
                                                            <input type="text" name = "kelurahan" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Street Name</label>
                                                            <input type="text" name = "nama_jalan" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Postal code</label>
                                                            <input type="number" name = "kode_pos" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Transportation To School</label>
                                                            <input type="text" name = "transportasi_sekolah" class = "form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Residential Distance</label>
                                                            <input type="text" name = "jarak_tempat_tinggal" class = "form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Waktu Tempuh</label>
                                                            <input type="text" name = "waktu_tempuh" class = "form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Passport Photo 4 x 3</label>
                                                            <input type="file" name = "foto" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Upload Deed</label>
                                                            <input type="file" name = "akte" class = "form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Upload KK</label>
                                                            <input type="file" name = "kk" class = "form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                
                                    </div>
                                    <div class="tab-pane fade" id="keterangan" role="tabpanel" aria-labelledby="profile-tab4">
                                        <div class="col-md-12">
                                            <h6>Additional information</h6>
                                            <div class="form-group">
                                                <label for="">No Handphone</label>
                                                <input type="text" name = "no_handphone" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Who Funds the School</label>
                                                <input type="text" name = "yang_biayai_sekolah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Special Needs</label>
                                                <input type="text" name = "kebutuhan_khusus" class = "form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Disability Needs</label>
                                                <input type="text" name = "kebutuhan_disabilitas" class = "form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Date of entry</label>
                                                <input type="date" name = "tgl_masuk" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Grade Level</label>
                                                <input type="text" name = "tingkat_kelas" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Family Card Number</label>
                                                <input type="number" name = "nomer_kartu_keluarga" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Family Head Name</label>
                                                <input type="text" name = "nama_kepala_keluarga" class = "form-control" required>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                        <div class="col-md-12">
                                            <h6>Information from Student's Parents (Birtual Father)</h6>
                                            <div class="form-group">
                                                <label for="">Father's Name</label>
                                                <input type="text" name = "nama_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status_ayah" class = "form-control" required id="">
                                                    <option>--Pilih Status--</option>
                                                    <option value = "Masih Hidup">Still alive</option>
                                                    <option value = "Sudah Meninggal">Already dead</option>
                                                    <option value = "Tidak Diketahui">Not known</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nik</label>
                                                <input type="text" name = "nik_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Place of birth</label>
                                                <input type="text" name = "tempat_lahir_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Date of birth</label>
                                                <input type="date" name = "tgl_lahir_ayah" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Last education</label>
                                                <input type="text" name = "pendidikan_terakhir_ayah" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">The main job</label>
                                                <input type="text" name = "pekerjaan_utama_ayah" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Average Income</label>
                                                <select name="penghasilan_rata_rata_ayah" class = "form-control" required id="">
                                                    <option>--Average Income--</option>
                                                    <option value = "< Rp.500.000">< Rp.500.000</option>
                                                    <option value = "Rp. 500.000 - 1.000.000">Rp. 500.000 - 1.000.000</option>
                                                    <option value = "Rp. 1.000.000 - 2.000.000">Rp. 1.000.000 - 2.000.000</option>
                                                    <option value = "Rp. 1.000.000 - 3.000.000">Rp. 1.000.000 - 3.000.000</option>
                                                    <option value = "Rp. 3.000.000 - 5.000.000">Rp. 3.000.000 - 5.000.000</option>
                                                    <option value = "> Rp.5.000.000">< Rp.5.000.000</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">No Handphone</label>
                                                <input type="text" name = "no_handphone_ayah" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Status of residence</label>
                                                <select name="status_tempat_tinggal_ayah" class = "form-control" id="" required>
                                                    <option value="Milik Sendiri">One's own</option>
                                                    <option value="Rumah Orangtua">Parents' House</option>
                                                    <option value="Rumah Saudara">Brother's house</option>
                                                    <option value="Rumah Dinas">Official residence</option>
                                                    <option value="Sewa/Kontrak">Rent/Contract</option>
                                                    <option value="Lainnya">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Province</label>
                                                <input type="text" name = "provinsi_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Regency/City</label>
                                                <input type="text" name = "kabupaten_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Subdistrict</label>
                                                <input type="text" name = "kecamatan_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Ward/Village</label>
                                                <input type="text" name = "kelurahan_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Street Name</label>
                                                <input type="text" name = "nama_jalan_ayah" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Postal code</label>
                                                <input type="number" name = "kode_pos_ayah" class = "form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                        <div class="col-md-12">
                                            <h6>Information from Student's Parents (Birtual Mother)</h6>
                                            <div class="form-group">
                                                <label for="">Nama Ibu Kandung</label>
                                                <input type="text" name = "nama_ibu_kandung" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status_ibu_kandung" class = "form-control" required id="">
                                                    <option>--Chhose Status--</option>
                                                    <option value = "Masih Hidup">Still alive</option>
                                                    <option value = "Sudah Meninggal">Already dead</option>
                                                    <option value = "Tidak Diketahui">Not known</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nik</label>
                                                <input type="text" name = "nik_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Place of birth</label>
                                                <input type="text" name = "tempat_lahir_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Date of birth</label>
                                                <input type="date" name = "tgl_lahir_ibu" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Last education</label>
                                                <input type="text" name = "pendidikan_terakhir_ibu" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">The main job</label>
                                                <input type="text" name = "pekerjaan_utama_ibu" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Average Income</label>
                                                <select name="penghasilan_rata_rata_ibu" class = "form-control" required id="">
                                                    <option>--Average Income--</option>
                                                    <option value = "< Rp.500.000">< Rp.500.000</option>
                                                    <option value = "Rp. 500.000 - 1.000.000">Rp. 500.000 - 1.000.000</option>
                                                    <option value = "Rp. 1.000.000 - 2.000.000">Rp. 1.000.000 - 2.000.000</option>
                                                    <option value = "Rp. 1.000.000 - 3.000.000">Rp. 1.000.000 - 3.000.000</option>
                                                    <option value = "Rp. 3.000.000 - 5.000.000">Rp. 3.000.000 - 5.000.000</option>
                                                    <option value = "> Rp.5.000.000">< Rp.5.000.000</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">No Handphone</label>
                                                <input type="text" name = "no_handphone_ibu" class = "form-control" required>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Status of residence</label>
                                                <select name="status_tempat_tinggal_ibu" class = "form-control" id="" required>
                                                    <option value="Milik Sendiri">One's own</option>
                                                    <option value="Rumah Orangtua">Parents' House</option>
                                                    <option value="Rumah Saudara">Brother's house</option>
                                                    <option value="Rumah Dinas">Official residence</option>
                                                    <option value="Sewa/Kontrak">Rent/Contract</option>
                                                    <option value="Lainnya">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Province</label>
                                                <input type="text" name = "provinsi_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Regency/City</label>
                                                <input type="text" name = "kabupaten_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Subdistrict</label>
                                                <input type="text" name = "kecamatan_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Ward/Village</label>
                                                <input type="text" name = "kelurahan_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Street Name</label>
                                                <input type="text" name = "nama_jalan_ibu" class = "form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Postal code</label>
                                                <input type="number" name = "kode_pos_ibu" class = "form-control" required>
                                            </div>
                                        
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="kesanggupan" role="tabpanel" aria-labelledby="contact-tab4">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5>Willingness Letter</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Download the Statement Letter Template :</p>

                                                <a href="<?= base_url('assets_calon/download.docx')?>" class = "btn btn-warning">Download Certificate</a>

                                                <div class="form-group">
                                                    <label for="">Upload Certificate</label>
                                                    <input type="file" class = "form-control" required name = "surat_keterangan">
                                                </div>

                                                <div class="text-right">
                                                    <button type="submit" class = "btn btn-primary mt-3">Save</button>
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
       </div>
   </section>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/vfs_fonts.js') ?>"></script>
  <script src="<?= base_url('assets/datatables/buttons.html5.min.js') ?>"></script>
  <script src="<?= base_url()?>/assets/js/stisla.js"></script>
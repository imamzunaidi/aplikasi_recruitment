 <!-- ======= Contact Section ======= -->
 <style>
  .container-blog {
    width: 80%;
    margin: auto;
  }
  @media(max-width: 768px) {
    .container-blog {
      width: 80%;
    }
  }
 </style>
 <section id = "tentang" class = "mt-5">
  <div class="container-blog">
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <img src="<?= base_url('assets/img/informasi/'.$informasi->gambar_informasi)?>" class="w-100">
        <h3 class="mt-4"><?= $informasi->judul?></h3>  
        <small><?= $informasi->tgl_informasi?></small>
        <p class = "text-justify"><?= $informasi->deskripsi?></p>
      </div>
    </div>
  </div>
</section>


 
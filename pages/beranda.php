<!-- kotak  hero image -->
<div class="kotakAtas container-fluid">
   <style>
      #hero_welcome {
         display: flex;
         justify-content: center;
         align-items: center;
         color: #1E357D;
         flex-direction: row;
      }
   </style>
   <div id="hero_welcome">
      <div class="hero_title">
         <p class="hero_title_1">
            Himpunan Mahasiswa Jurusan
         </p>
         <p class="hero_title_2">
            Sistem Informasi
         <p class="hero_title_3">
            UIN Alauddin Makassar
         </p>
      </div>
      <div class="gambar-hero">
         <img id="hero_1" class="hero_1" src="assets\image\Hero-1.png" alt="tes">
      </div>
   </div>
</div>
<!-- tentang (kenali kami lebih lanjut) -->
<style>

</style>
<div id="b-tentang" class="container d-flex">
   <div class="tentang d-flex gap-3">
      <p class="tt">Tentang</p>
      <p class="ls"> Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan organisasi yang kondusif dan dinamis</p>
      <button id="knli" class="btn btn-outline-secondary">
         Kenali Kami Lebih Lanjut
      </button>
   </div>
   <div class="gambar-logo">
      <img src="assets\image\Group 2007.png" alt="logo-hmj-si">
   </div>
</div>
<!-- =========================== visimisi ================================ -->
<style>

</style>
<!-- <div id="visimisi" class="visi-misi d-flex">
   <div>
      <img src="assets\image\Visi_Misi.png" alt="">
   </div>
   <div id="vss" class="isi-visi-misi">
      <div class="visi">
         <p class="head-visi">Visi</p>
         <p>Mewujudkan HMJ-SI yang adaptif, atraktif dan solutif, serta mampu menjadi wadah pemersatu, penampung aspirasi dan pengembangan diri mahasiswa Sistem Informasi yang berlandaskan kekeluargaan.</p>
      </div>
      <div class="misi container">
         <p class="head-misi">Misi</p>
         <ol>
            <li>Menumbuhkan rasa kekeluargaan dan solidaritas yang tinggi di dalam internal HMJ-SI.</li>
            <li>Mewujudkan anggota HMJ-SI yang aktif, inspiratif dan bertanggung jawab terhadap roda kepengurusan.</li>
            <li>Menjalin hubungan dan kerjasama atas dasar kekeluargaan dengan organisasi di dalam atau di luar HMJ-SI.</li>
            <li>Menjunjung tinggi profesionalitas demi terciptanya ruang kreativitas yang nyaman.</li>
         </ol>
      </div>
   </div>
</div>
</div> -->
<!-- =========================== Highlight ================================ -->
<style>
</style>

<div class="hailaig container">
   <h2>Info Penting</h2>
   <!-- <div class="susunan d-flex">
      <img src="assets\image\Berita_Kajur.png" alt="gambar">
   </div> -->
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="assets\image\Berita_Kajur.png" class="" alt="...">
         </div>
         <div class="carousel-item">
            <img src="assets\image\Berita_Kajur.png" class="d-block " alt="...">
         </div>
         <div class="carousel-item">
            <img src="assets\image\Berita_Kajur.png" class="d-block " alt="...">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>

<!-- ============================= Berita Terkini ============================= -->
<div class="berita-terkini container">
   <!-- <div class="swiper-button-next swiper-navBtn"></div>
   <div class="swiper-button-prev swiper-navBtn"></div>
   <div class="swiper-pagination"></div>   -->
   <div class="header-kegiatan">
      <h4>Kegiatan</h4>
   </div>
   <!-- <div class="berita row row-cols-1 row-cols-md-4 g-4">
      <?php
      $count = 0; // Variabel penanda jumlah card yang sudah ditampilkan

      if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
            if ($count >= 4) {
               break; // Keluar dari loop setelah 4 card ditampilkan
            }

            $length = 100; // Panjang maksimal teks yang ingin ditampilkan

            if (strlen($row["teks"]) > $length) {
               $shortText = substr($row["teks"], 0, $length) . "...";
            } else {
               $shortText = $row["teks"];
            }
      ?>
            <div class="col">
               <div class="card">
                  <img src="./assets/image/IMG_9181 1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $row["judul"]; ?> </h5>
                     <p class="card-text"><?php echo $shortText; ?></p>
                     <div class="tombol">
                        <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
                     </div>
                  </div>
               </div>
            </div>
      <?php
            $count++; // Increment variabel penanda jumlah card yang sudah ditampilkan
         }
      }
      ?>
   </div> -->

   <!-- css  card kegiatan-->
   <style>

   </style>
   <!-- akhir css kegiatan  -->
   <div class="slide-container">
      <div class="slide-content">
         <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
               <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                     <img src="assets\image\IMG_1075.png" alt="" class="card-img">
                  </div>
               </div>
               <div class="card-content">
                  <h2 class="name">David Dell</h2>
                  <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                  <button class="button">View More</button>
               </div>
            </div>
            <div class="card swiper-slide">
               <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                     <img src="assets\image\IMG_1075.png" alt="" class="card-img">
                  </div>
               </div>
               <div class="card-content">
                  <h2 class="name">David Dell</h2>
                  <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                  <button class="button">View More</button>
               </div>
            </div>
            <div class="card swiper-slide">
               <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                     <img src="images/profile3.jpg" alt="" class="card-img">
                  </div>
               </div>
               <div class="card-content">
                  <h2 class="name">David Dell</h2>
                  <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                  <button class="button">View More</button>
               </div>
            </div>
            <div class="card swiper-slide">
               <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                     <img src="assets\image\IMG_1075.png" alt="" class="card-img">
                  </div>
               </div>
               <div class="card-content">
                  <h2 class="name">David Dell</h2>
                  <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                  <button class="button">View More</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- <div class="kegiatan-terkini container"> <div class="atas mt-5 d-flex justify-content-between"> <p class="fw-bold">KEGIATAN TERKINI</p> <a href="kegiatan.html" class="text-secondary" style="text-decoration: underline;">Selengkapnya..</a> </div> <div class="kegiatan row row-cols-1 row-cols-md-4 g-4"> <div class="col"> <div class="card"> <img src="./assets/image/IMG_9181 1.png" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">Company Visit</h5> <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="tombol"> <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a> </div> </div> </div> </div> <div class="col"> <div class="card"> <img src="./assets/image/WhatsApp Image 2022-08-31 at 17.36.png" class="card-img-top" alt="gambar bersama"> <div class="card-body"> <h5 class="card-title">Card title</h5> <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="tombol"> <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a> </div> </div> </div> </div> <div class="col"> <div class="card"> <img src="./assets/image/IMG_1075.png" class="card-img-top" alt="gambar bersama"> <div class="card-body"> <h5 class="card-title">Card title</h5> <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="tombol"> <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a> </div> </div> </div> </div> <div class="col"> <div class="card"> <img src="./assets/image/IMG_4846 1.png" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">Card title</h5> <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="tombol"> <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a> </div> </div> </div> </div> </div> </div> -->



<!-- pengurussssssssssssss -->
<div class="pengurus container">
   <p class="text-center fw-bold mt-5 fs-5">PENGURUS HMJ-SI Periode 2022-2023</p>
   <div class="container">
      <div class="big-3 container">
         <div class="row row-cols-1 row-cols-md-4 row-cols-sm-4 g-4 m-auto">
            <div class="fajratul col">
               <div class="presidum card">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="./assets/image/1.png" class="presidum card-img-top" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="nama card-title text-white fw-bold">M. FAJRATUL IKHSAN</h5>
                           <hr>
                           <p class="deskripsi card-text text-warning fw-bold">Ketua Umum</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="farid col mt-5">
               <div class="presidum card">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="./assets/image/3.png" class="presidum card-img-top" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="nama card-title text-white fw-bold">NUR FARID MUFID NR</h5>
                           <hr>
                           <p class="deskripsi card-text text-warning fw-bold">Sekretaris Umum</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="irma col mt-5">
               <div class="presidum card">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="./assets/image/2.png" class="presidum card-img-top" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="nama card-title text-white fw-bold">IRMA SURIANI S</h5>
                           <hr>
                           <p class="deskripsi card-text text-warning fw-bold">Bendahara Umum</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <a class="text-secondary fw-bold float-end mt-2" style="text-decoration: underline;" href="tentang.html">Struktur Organisasi</a>
</div>
<div class="peta container mt-5">
   <p class="fw-bold"><i class="bi bi-geo-alt-fill"></i>HMJ SISTEM INFORMASI</p>
   <div class="maps embed-responsive embed-responsive-2by1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3602177171547!2d119.49512881544499!3d-5.205954353927998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3a40ef0aa8f%3A0xad3e30fed1b78902!2sSekretariat%20HMJ%20Sistem%20Informasi%20UINAM!5e0!3m2!1sen!2sid!4v1680202270809!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</div>
<script src="assets/js/slider-kegiatan.js"></script>
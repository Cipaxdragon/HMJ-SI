<!-- kotak  hero image -->
<div class="kotakAtas container-fluid">
   <style>
      .kotakAtas {
         background-image: url('assets/image/Bg_hero.png');
         padding: 0px;
         background-color: white;
      }

      .judul {
         justify-content: center;
         align-items: center;
         color: blue;
         display: flex;
      }

      .hero_title_1 {
         margin: 0px;
         color: #1E357D;
         font-family: Montserrat;
         font-size: 28.023px;
         font-style: normal;
         font-weight: 700;
         line-height: 100%;
         /* 28.023px */
         letter-spacing: -1.962px;
      }

      .hero_title_2 {
         margin: 0px;
         color: #1E357D;
         font-family: Montserrat;
         font-size: 51.064px;
         font-style: normal;
         font-weight: 700;
         line-height: 100%;
         letter-spacing: -3.574px;
      }

      .hero_title_3 {
         margin: 0px;
         color: #1E357D;
         font-family: Montserrat;
         font-size: 28.023px;
         font-style: normal;
         font-weight: 700;
         line-height: 130%;
         letter-spacing: -1.962px;
      }

      .hero_1 {
         width: 1060px;
      }

      /* responsive */
      @media (max-width: 768px) {

         /* Styles for devices with a maximum width of 768px (e.g., mobile devices) */
         /* .judul {
            margin-top: 30px;
            display: flex;

         }

         .judul img {
            align-items: center;
            width: 360px;
            opacity: 30%;
         }

         .judul .hero_title {
            margin-top: -100px;
            position: absolute;
            text-align: center;
         } */

         .judul {
            align-items: center;
            margin-top: 20px;
            display: block;
         }

         .judul .hero_title {
            text-align: center;
         }

         .judul .gambar-hero {
            width: 360px;
            margin: auto;
         }

         .judul .gambar-hero img {
            align-items: center;
            margin-top: -30px;
            width: 360px;
         }

         .judul .hero_title_1 {
            font-size: 20px;
         }

         .judul .hero_title_2 {
            font-size: 40px;
         }

         .judul .hero_title_3 {
            font-size: 20px;
         }

      }
   </style>
   <div class="judul">
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
   .container {
      flex-direction: row;
   }

   .tentang {
      color: #1E357D;
      flex-direction: column;
      /* display: flex; */
      /* text-align: left; */
      /* align-items: center; */
      margin: auto;
      font-size: 20px;
      width: 100%;

   }

   .tt {
      /* font-size: 40px; */
      font-family: "Montserrat";
      font-weight: 600;
      height: 23px;
   }

   .ls {
      font-size: 16px;
      font-family: "Montserrat";
      font-weight: 500;
      width: 80%;
   }

   .gambar-logo img {
      width: 400px;
      margin-right: -80px;
   }

   #knli {
      background-image: url('assets\image\tm.png');
      font-size: 14.11px;
      font-family: "Montserrat";
      font-weight: 600;
      color: rgba(77, 77, 77, 1);
      height: 17px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      width: 213px;
      height: 33px;
      transition: transform 0.3s;
   }

   #knli:hover {
      border-color: #1E357D;
      color: #1E357D;
      transform: scale(1.1);
      background-color: white;
   }

   @media (max-width: 768px) {
      .tentang {
         display: flex;
         text-align: center;
         flex-direction: column;
      }

      .tt {
         font-weight: bold;
         margin-top: 40px;
         font-size: 28px;
      }

      .gambar-logo img {
         order: 1;
         width: 250px;
         margin: auto;
      }

      .ls {
         font-size: 16px;
      }


   }
</style>
<div class="container d-flex">
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
   .visi-misi {
      display: flex;
      margin-top: 0;
      /* justify-content: space-between ; */
   }

   .visi-misi img {
      width: 600px;
   }

   @media (max-width: 768px) {
      .visi-misi {
         margin-left: -195px;
      }

      .visi-misi img {
         width: 300px;
         height: 350px;
         margin: auto;
      }

      .isi-visi-misi {
         width: 300px;
         margin-left: 225px;
         margin-top: -30px;
         position: absolute;
         display: block;

      }

      .head-visi,
      .head-misi {
         font-size: 20px;
         font-weight: bold;
         text-align: center;
      }

      .visi {
         font-size: 12px;
         text-align: center;
      }

      .misi {
         margin-left: 40px;
         font-size: 12px;
         text-align: center;
      }


   }
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
   .hailaig {
      color: #1E357D;
      background-color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: center;
      height: 617px;
      text-align: center;
   }

   .hailaig img {
      box-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.25);
      border-radius: 30px;
      width: 900px;
   }

   .carousel-inner {
      border-radius: 30px;
      width: 900px;
   }

   .susunan {
      display: flex !important;
      justify-content: center;
      align-items: center;
      flex-direction: row;
   }

   @media (max-width: 768px) {
      .hailaig {
         margin-top: -180px;
      }

      .carousel-inner {
         border-radius: 30px;
         width: 370px;
         margin: auto;
      }

      .susunan img {
         width: 350px;
         margin-top: 30px;
      }
   }
</style>

<div class="container hailaig">
   <h2>Info Penting</h2>
   <!-- <div class="susunan d-flex">
      <img src="assets\image\Berita_Kajur.png" alt="gambar">
   </div> -->
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="assets\image\Berita_Kajur.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="assets\image\Berita_Kajur.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="assets\image\Berita_Kajur.png" class="d-block w-100" alt="...">
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
      /* * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
      } */

      /* body {
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         background-color: #EFEFEF;
      } */

      .slide-container {
         max-width: 1120px;
         width: 100%;
         padding: 40px 0;
         margin: auto;
      }

      .slide-content {
         margin: 0 40px;
         overflow: hidden;
         border-radius: 25px;
      }

      .card {
         border-radius: 25px;
         background-color: #FFF;
      }

      .image-content,
      .card-content {
         display: flex;
         flex-direction: column;
         align-items: center;
         padding: 10px 14px;
      }

      .image-content {
         position: relative;
         row-gap: 5px;
         padding: 25px 0;
      }

      .overlay {
         position: absolute;
         left: 0;
         top: 0;
         height: 100%;
         width: 100%;
         background-color: #4070F4;
         border-radius: 25px 25px 0 25px;
      }

      .overlay::before,
      .overlay::after {
         content: '';
         position: absolute;
         right: 0;
         bottom: -40px;
         height: 40px;
         width: 40px;
         background-color: #4070F4;
      }

      .overlay::after {
         border-radius: 0 25px 0 0;
         background-color: #FFF;
      }

      .card-image {
         position: relative;
         height: 150px;
         width: 150px;
         border-radius: 50%;
         background: #FFF;
         padding: 3px;
      }

      .card-image .card-img {
         height: 100%;
         width: 100%;
         object-fit: cover;
         border-radius: 50%;
         border: 4px solid #4070F4;
      }

      .name {
         font-size: 18px;
         font-weight: 500;
         color: #333;
      }

      .description {
         font-size: 14px;
         color: #707070;
         text-align: center;
      }

      .button {
         border: none;
         font-size: 16px;
         color: #FFF;
         padding: 8px 16px;
         background-color: #4070F4;
         border-radius: 6px;
         margin: 14px;
         cursor: pointer;
         transition: all 0.3s ease;
      }

      .button:hover {
         background: #265DF2;
      }

      .swiper-navBtn {
         color: #6E93f7;
         transition: color 0.3s ease;
      }

      .swiper-navBtn:hover {
         color: #4070F4;
      }

      .swiper-navBtn::before,
      .swiper-navBtn::after {
         font-size: 35px;
      }

      /* .swiper-button-next {
         right: 0;
      }

      .swiper-button-prev {
         left: 0;
      } */

      .swiper-pagination-bullet {
         background-color: #6E93f7;
         opacity: 1;
      }

      .swiper-pagination-bullet-active {
         background-color: #4070F4;
      }

      @media screen and (max-width: 768px) {
         .slide-content {
            margin: 0 10px;
         }

         .swiper-navBtn {
            display: none;
         }
      }
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
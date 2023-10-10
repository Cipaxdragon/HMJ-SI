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
         .judul {
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
         }
      }
   </style>
   <div class="judul">
      <div>
         <div class="hero_title">
            <p class="hero_title_1">
               Himpunan Mahasiswa Jurusan
            </p>
            <p class="hero_title_2">
               Sistem Informasi
               </span>
            <p class="hero_title_3">
               UIN Alauddin Makassar
            </p>
         </div>
      </div>
      <div>
         <img id="hero_1" class="hero_1" src="assets\image\Hero-1.png" alt="tes">
      </div>
   </div>
</div>
<!-- tentang (kenali kami lebih lanjut) -->
<div class="container tentang d-flex">
   <style>
      .tentang {
         color: #1E357D;
         display: flex;
         text-align: left;
         align-items: center;
      }

      .tt {
         font-size: 40px;
         font-family: "Montserrat";
         font-weight: 600;
         height: 23px;
      }

      .ls {
         font-size: 18px;
         font-family: "Montserrat";
         font-weight: 500;
      }

      .gambar-logo img {
         width: 600px;
         margin-right: -100px;
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
            flex-direction: column-reverse;
         }

         .tt {
            margin-top: -290px;
            font-size: 28px;
         }

         .gambar-logo img {
            order: 1;
            width: 300px;
            margin: auto;
         }

         .ls {
            font-size: 16px;
            margin-top: -50px;
         }


      }
   </style>
   <div style="flex-direction: column;" class="tentang d-flex gap-3">
      <div>
         <p class="tt">Tentang</p>
      </div>
      <div>
         <p class="ls"> Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan organisasi yang kondusif dan dinamis</p>
      </div>
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
         margin-top: 70px;
         display: flex;
         flex-direction: column;
         align-items: center;
      }

      .visi-misi img {
         width: 300px;
         margin: auto;
      }

      .isi-visi-misi {
         margin-top: 20px;
         flex-direction: column;
      }

      .head-visi, .head-misi{
         font-size: 20px;
         font-weight: bold;
         text-align: center;
      }

      .visi{
         text-align: center;
      }

      .misi{
         margin: auto;
      }


   }
</style>
<div id="visimisi" class="visi-misi d-flex">
   <div>
      <img src="assets\image\Visi_Misi.png" alt="">
   </div>
   <div id="vss" class="isi-visi-misi d-flex gap-3">
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
</div>
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

   .susunan {
      display: flex !important;
      justify-content: center;
      align-items: center;
      flex-direction: row;
   }

   @media (max-width: 768px){
      .hailaig{
         margin-top: -180px;
      }

      .susunan img{
         width: 350px;
         margin-top: 30px;
      }
   }
</style>
<div class="hailaig">
   <h2>Info Penting</h2>
   <div class="susunan d-flex">
      <img src="assets\image\Berita_Kajur.png" alt="gambar">
   </div>
</div>




<!-- ============================= Berita Terkini ============================= -->
<div class="berita-terkini container">
   <div class="header-kegiatan">
      <h4>Kegiatan</h4>
   </div>
   <div class="berita row row-cols-1 row-cols-md-4 g-4">
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
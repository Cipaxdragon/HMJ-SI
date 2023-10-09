<!-- kotak  hero image -->
<div class="kotakAtas container-fluid">
   <style>
      .kotakAtas {
         background-image: url('assets/image/Bg_hero.png');

         padding :0px;
      background-color :white;
      }
      .judul {
      justify-content: center;
      align-items: center;
      color : blue; 
      display : flex;
      }
      .hero_title_1{
      margin : 0px;
      color: #1E357D;
      font-family: Montserrat;
      font-size: 28.023px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%; /* 28.023px */
      letter-spacing: -1.962px;
      }
      .hero_title_2{
      margin : 0px;
      color: #1E357D;
      font-family: Montserrat;
      font-size: 51.064px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%;
      letter-spacing: -3.574px;
      }
      .hero_title_3{
      margin : 0px;
      color: #1E357D;
      font-family: Montserrat;
      font-size: 28.023px;
      font-style: normal;
      font-weight: 700;
      line-height: 130%;
      letter-spacing: -1.962px;
      }
      #hero_1{
      width: 1060px;
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
         <img id="hero_1" src="assets\image\Hero-1.png" alt="tes">
      </div>
   </div>
</div>



<!-- tentang (kenali kami lebih lanjut) -->
<div class='tentang d-flex gap-3 '>
   <style>
      .tentang{
         margin-top:60px;
         margin-bottom:60px;
         display: flex!important;
    flex-wrap: wrap;
    align-items: center;
    align-content: space-between;
    justify-content: space-around;
    flex-direction: row;
      }
   .tt {
      font-size: 18.81px;
font-family: "Montserrat";
font-weight: 600;
color: rgba(6, 21, 35, 1);
width: 100px;
height: 23px;
   }
.ls {
   font-size: 13.11px;
font-family: "Montserrat";
font-weight: 500;
color: rgba(6, 21, 35, 1);
width: 379.17px;
height: 85px;
}

#knli{
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
#knli:hover{
   border-color : #1E357D;
   color: #1E357D;
   transform: scale(1.1);
   background-color : white;
}
   </style>
   <div style="flex-direction: column;" class="d-flex gap-3">
      <div >
         <p class="tt">Tentang</p>
      </div>
      <div>
         <p class="ls">Lorem ipsum dolor sit amet consectetur. Dis mattis pretium ut semper augue nunc aliquam augue. Lectus arcu cursus aenean egestas. Eget amet eget tortor dolor ac. </p>
      </div>
      <button id="knli"class = "btn btn-outline-secondary">
         Kenali Kami Lebih Lanjut
</button>   
   </div>
   <div>
      <img src="assets\image\Group 2007.png" alt="">
   </div>
</div>


<!-- =========================== visimisi ================================ -->
<div class='tentang d-flex gap-3 '>
   <div>
      <img src="assets\image\Group 2007.png" alt="">
   </div>
   <div style="flex-direction: column;" class="d-flex gap-3">
      <div >
         <p class="tt">VIsi Misi</p>
      </div>
      <div>
         <p class="ls">Lorem ipsum dolor sit amet consectetur. Dis mattis pretium ut semper augue nunc aliquam augue. Lectus arcu cursus aenean egestas. Eget amet eget tortor dolor ac. </p>
         </div>
   
      </div>
      
   </div>
<!-- =========================== Highlight ================================ -->

<style>
.hailaig{
  text-align: center;
}
.hailaig img{
   width: 400px;
   
}
.susunan{
   display: flex!important;
    justify-content: center;
    align-items: center;
    flex-direction: row;
   
}


</style>
<div class="hailaig">
   <h2>Info Penting</h2>
   <div class="susunan d-flex gap-3">
      <img src="assets\image\DSC08205.JPG" alt="gambar">
      <img src="assets\image\DSC08205.JPG" alt="gambar">
      <img src="assets\image\DSC08205.JPG" alt="gambar">
   </div>      

</div>



<!-- ============================= Berita Terkini ============================= -->
<div class="berita-terkini container mt-5">
   <div class="dropdown">
      <button class="btn dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      BERITA TERKINI
      </button>
      <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="info-beasiswa.html"><i class="fa-solid fa-graduation-cap"></i>Info Beasiswa</a></li>
         <li><a class="dropdown-item" href="info-pendaftaran.html"><i class="fa-solid fa-building-columns"></i> Info Pendaftaran</a></li>
         <li><a class="dropdown-item" href="pengumuman.html"><i class="fa-solid fa-circle-exclamation"></i></i> Info Pengumuman</a></li>
      </ul>
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
<div class="kegiatan-terkini container">
   <div class="atas mt-5 d-flex justify-content-between">
      <p class="fw-bold">KEGIATAN TERKINI</p>
      <a href="kegiatan.html" class="text-secondary" style="text-decoration: underline;">Selengkapnya..</a>
   </div>
   <div class="kegiatan row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
         <div class="card">
            <img src="./assets/image/IMG_9181 1.png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Company Visit</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <div class="tombol">
                  <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card">
            <img src="./assets/image/WhatsApp Image 2022-08-31 at 17.36.png" class="card-img-top" alt="gambar bersama">
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <div class="tombol">
                  <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card">
            <img src="./assets/image/IMG_1075.png" class="card-img-top" alt="gambar bersama">
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <div class="tombol">
                  <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card">
            <img src="./assets/image/IMG_4846 1.png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <div class="tombol">
                  <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="pengurus container">
   <p class="text-center fw-bold mt-5 fs-5">PENGURUS HMJ-SI</p>
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
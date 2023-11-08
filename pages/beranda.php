<?php
include_once "includes/p_berita.php";

?>
<!-- kotak  hero image -->
<div class="kotakAtas container-fluid">
   <div class="judul animate__animated animate__fadeInUp">
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
   <div class="tentang d-flex gap-3" data-aos="fade-up" data-aos-duration="1000">
      <p class="tt">Tentang</p>
      <p class="ls"> Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan organisasi yang kondusif dan dinamis</p>
      <button id="knli" class="btn btn-outline-secondary">
         Kenali Kami Lebih Lanjut
      </button>
   </div>
   <div class="gambar-logo" data-aos="fade-up" data-aos-duration="1000">
      <img src="assets\image\Group 2007.png" alt="logo-hmj-si">
   </div>
</div>
<!-- =========================== Highlight ================================ -->
<div class="hailaig container">
   <style>
      .hailaig img {
         box-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.25);
         border-radius: 30px;
         width: 900px;
         height: 400px;
         object-fit: cover;
      }
   </style>
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
            <img src="assets\image\IMG_1075.png" class="d-block " alt="...">
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
   <style>
      .image-content {
         /* position: relative; */
         row-gap: 5px;
         padding: 15px 0;
      }
   </style>
   <div class="header-kegiatan text-center mt-5">
      <h4>Artikel</h4>
   </div>

   <!-- akhir css kegiatan  -->
   <div class="slide-container mt-4" data-aos="fade-up" data-aos-duration="1000">
      <div class="slide-content">
         <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
               <div class="image-content">
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

<!-- pengurussssssssssssss -->
<div class="pengurus container">
   <p class="text-center fw-bold mt-5 fs-5">PENGURUS HMJ-SI Periode 2022-2023</p>
   <div class="container">
      <div class="big-3 container">
         <div class="row row-cols-1 row-cols-md-4 row-cols-sm-4 g-4 m-auto">
            <div class="fajratul col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
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
            <div class="farid col mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
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
            <div class="irma col mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
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

<!-- GALERY -->
<div class="galery container">
   <style>
      .galery {
         margin-top: 100px;
      }

      .cd__main {
         display: block !important;
      }

      /* .container {
  max-width: 80rem;
  width: 100%;
  padding: 4rem 2rem;
  margin: 0 auto;
} */

      .main .container {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         grid-gap: 1rem;
         width: 80%;
         justify-content: center;
         align-items: center;
      }

      .main .card {
         color: #252a32;
         border-radius: 2px;
         background: #ffffff;
         width: 80%;
         box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
      }

      .main .card-image {
         position: relative;
         display: block;
         width: 100%;
         padding-top: 70%;
         background: #ffffff;
      }

      .main .card-image img {
         display: block;
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      @media only screen and (max-width: 600px) {
         .main .container {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 1rem;
         }
      }
   </style>
   <p class="text-center fw-bold mt-5 fs-5">GALERY HMJ</p>
   <main class="main">
      <div class="container">
         <div class="card" data-aos="flip-down" data-aos-duration="1000">
            <div class="card-image">
               <a href="assets\image\IMG_1075.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_1075.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-duration="1000">
            <div class="card-image">
               <a href="assets\image\IMG_4846 1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_4846 1.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-duration="1000">
            <div class="card-image">
               <a href="assets\image\IMG_1075.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_1075.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="200">
            <div class="card-image">
               <a href="assets\image\IMG_4846 1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_4846 1.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="200">
            <div class="card-image">
               <a href="assets\image\IMG_1075.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_1075.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="200">
            <div class="card-image">
               <a href="assets\image\IMG_4846 1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_4846 1.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="400">
            <div class="card-image">
               <a href="https://cdn.discordapp.com/attachments/847167613842489405/1166431154690330674/Diki_1.png?ex=654a76aa&is=653801aa&hm=1d06161a6b09bef3b08e8f2e4540bcdd2679924960b43cbc724cfc7a13e85b05&" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="https://cdn.discordapp.com/attachments/847167613842489405/1166431154690330674/Diki_1.png?ex=654a76aa&is=653801aa&hm=1d06161a6b09bef3b08e8f2e4540bcdd2679924960b43cbc724cfc7a13e85b05&" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="400">
            <div class="card-image">
               <a href="assets\image\IMG_4846 1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_4846 1.png" alt="Image Gallery">
               </a>
            </div>
         </div>
         <div class="card" data-aos="flip-down" data-aos-delay="400">
            <div class="card-image">
               <a href="assets\image\IMG_1075.png" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="assets\image\IMG_1075.png" alt="Image Gallery">
               </a>
            </div>
         </div>
      </div>
   </main>
</div>

   <style>
   #kritik{
      gap: 10px;
    display: flex;
    flex-direction: column;
   }
   </style>
<!-- kritik dan saran -->
<div  class="container mt-5">
        <h2>Form Kritik dan Saran</h2>
        <form id="kritik" class="mt-4">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Opsional">
            </div>
            
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea class="form-control" id="pesan" rows="4" placeholder="Tuliskan kritik dan saran Anda"></textarea>
            </div>
            <button  type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>



<!-- peta  -->
<div class="peta container mt-5">
   <p class="fw-bold"><i class="bi bi-geo-alt-fill"></i>HMJ SISTEM INFORMASI</p>
   <div class="maps embed-responsive embed-responsive-2by1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3602177171547!2d119.49512881544499!3d-5.205954353927998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3a40ef0aa8f%3A0xad3e30fed1b78902!2sSekretariat%20HMJ%20Sistem%20Informasi%20UINAM!5e0!3m2!1sen!2sid!4v1680202270809!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</div>

<script src="assets/js/slider-kegiatan.js"></script>
<script src="assets/js/galery.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
   AOS.init();
</script>
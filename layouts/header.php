<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets\css\gaya.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link rel="stylesheet" href="assets\css\bootstrap.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <script src="assets\js\bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <title>SISFO UINAM</title>
      <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">
      <style>
   ::-webkit-scrollbar {
    display: fixed;
    background-color : white;
    width: 7px;
}
::-webkit-scrollbar-thumb {
  background : #EBEBEB;
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background : #D6D6D6;
}

#kotakutama{
   padding : 0px
}

      </style>
   </head>
   <body>
      <div id="kotak_utama" class="kontainer container-fluid">
      <nav id="napbar" class="navbar navbar-expand-lg " style="background-color: white;">
         <div class="nav-con container d-flex justify-content-center-around ">
            <a href="index.html"><img class="logo-nav" src="./assets/image/logo hmjsi.png" alt="logo"></a>
            <a href="index.html" class="nama-nav fs-5" style="text-decoration: none; font-weight: 850;">SISFO UINAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
               <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li id="peding" class="nav-item">
                     <a class="nav-link fw-bold" href="index.php?page=beranda">Beranda</a>
                  </li>
                  <li id="peding" class="nav-item">
                     <a class="nav-link fw-bold" href="index.php?page=artikel">Artikel</a>
                  </li>
                  <li id="peding" class="nav-item">
                     <a class="nav-link fw-bold" href="index.php?page=pengurus">Pengurus</a>
                  </li>
                  <li id="peding" class="nav-item">
                     <a class="nav-link fw-bold" href="index.php?page=tentang">Tentang Kami</a>
                  </li>
                  <li id="peding" class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Lainnya
                     </a>
                     <ul id="peding" class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?page=beasiswa"><i class="fa-solid fa-graduation-cap"></i>Galeri</a></li>
                        <li><a class="dropdown-item" href="index.php?page=pendaftaran"><i class="fa-solid fa-building-columns"></i>Kritik Dan Saran</a></li>
                        <li><a class="dropdown-item" href="index.php?page=pengumuman"><i class="fa-solid fa-circle-exclamation"></i> Demisioner Ketua HMJ</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>


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
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="assets\js\bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>
   <title>SISFO UINAM</title>
   <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">
   <style>
      ::-webkit-scrollbar {
         display: fixed;
         background-color: white;
         width: 7px;
      }

      ::-webkit-scrollbar-thumb {
         background: #EBEBEB;
         border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb:hover {
         background: #D6D6D6;
      }
   </style>
</head>

<body>
   <header id="header" class="d-flex align-items-center">
      <style>
         #header {
            height: 80px;
            transition: all 0.5s;
            z-index: 997;
            transition: all 0.5s;
         }

         /* #header.header-scrolled {
            background: rgba(39, 70, 133, 0.8);
            height: 60px;
         } */

         #header .logo h1 {
            font-size: 28px;
            margin: 0;
            padding: 4px 0;
            line-height: 1;
            font-weight: 500;
         }

         #header .logo h1 a,
         #header .logo h1 a:hover {
            color: #1E357D;
            text-decoration: none;
         }

         #header .logo img {
            width: 50px;
            padding: 0;
            margin: 0;
            max-height: 50px;
         }

         /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
         /**
* Desktop Navigation 
*/
         .navbar {
            padding: 0;
            position: static;
         }

         .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
         }

         .navbar li {
            position: relative;
         }

         .navbar a,
         .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            font-size: 16px;
            font-weight: 600;
            color: #1E357D;
            white-space: nowrap;
            transition: 0.3s;
            text-decoration: none;
         }

         .navbar a i,
         .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
         }

         .navbar a:hover,
         .navbar .active,
         .navbar .active:focus,
         .navbar li:hover>a {
            color: #00A9FF;
         }

         @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
               left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
               left: -100%;
            }
         }

         /**
* Mobile Navigation 
*/
         .mobile-nav-toggle {
            color: #2d71a1;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
         }

         @media (max-width: 991px) {
            .mobile-nav-toggle {
               display: block;
            }

            .navbar ul {
               display: none;
            }
         }

         .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(27, 49, 94, 0.9);
            transition: 0.3s;
            z-index: 999;
         }

         .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
         }

         .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            border-radius: 10px;
            background-color: #2d71a1;
            overflow-y: auto;
            transition: 0.3s;
         }

         .navbar-mobile a,
         .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #101c36;
         }

         .navbar-mobile a:hover,
         .navbar-mobile .active,
         .navbar-mobile li:hover>a {
            color: #2d71a1;
         }

         .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            margin: 10px 20px;
            padding: 10px 0;
            z-index: 99;
            opacity: 1;
            visibility: visible;
            background: #2d71a1;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
         }

         .navbar-mobile .dropdown ul li {
            min-width: 200px;
         }
      </style>
      <div class="container d-flex justify-content-between align-items-center">

         <div class="logo">
            <a href="index.html"><img src="assets/image/logo-bundar.png" alt="Icon" class="img-fluid"></a>
         </div><!-- logo -->

         <nav id="navbar" class="navbar">
            <ul>
               <li><a href="index.php?page=beranda">Beranda</a></li>
               <li><a href="index.php?page=artikel">Berita</a></li>
               <li><a href="index.php?page=pengurus">Pengurus</a></li>
               <li><a href="index.php?page=tentang">Tentang</a></li>
               <li><a href="index.php?page=kontak">Lainnya</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

      </div>
   </header>

   <script src="assets/js/nav.js"></script>
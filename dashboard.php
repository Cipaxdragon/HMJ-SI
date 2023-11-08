<?php
session_start();
// Periksa apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if(!isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}
$username = $_SESSION['username'];
?>
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
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    <?php
    include_once "includes/koneksi.php";
        include_once "pages/crud/read.php";
        include_once "pages/crud/create.php";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>
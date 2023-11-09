<?php
   session_start();
   // Periksa apakah pengguna sudah login, jika tidak, alihkan ke halaman login
   if(!isset($_SESSION['username'])){
       header("Location: admin.php");
       exit;
   }
   $username = $_SESSION['username'];
   ?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CRUD Dashboard with Sidebar</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body class="bg-gray-100">
   <div class="ml-64">
    
   <header class="bg-gray-800 text-white text-center py-4">
            <h1 class="text-2xl font-semibold">CRUD Dashboard</h1>
         </header>
      <?php 
         include_once "includes/koneksi.php";
         include_once "pages/crud2/sidebar.php";

         $page = isset($_GET['page']) ? $_GET['page'] : 'artikel';
         switch ($page) {
           case 'artikel':
            include_once "pages/crud2/artikel.php";
             break;
             case 'edit':
                include_once "pages/crud2/edit.php";
                break; 
             case 'kritik':
                include_once "pages/crud2/kritik.php";
                break;   
           case 'pengurus':
            include_once "pages/crud2/pengurus.php";
             break;
         }  
         
         ?>
    
</div>
</body>
</html>
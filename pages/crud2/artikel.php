<!-- Daftar Artikel -->
<?php
   include_once "includes/read_artikel.php";
   if (isset($_POST['search'])) {
      $search = $_POST['search'];
      $postingan = searchArtikel($search); // Assuming you have a function to perform the search
   }
   
   
   ?>
<style>
   .max-w-lg {
   max-width: 72rem;
   }
   /* ... (CSS yang sudah ada) ... */
   #cari {
   gap: 15px;
   display: flex;
   align-content: center;
   justify-content: center;
   align-items: center;
   }
   /* ... (CSS yang sudah ada) ... */
   table {
   font-size: 14px;
   }
   th, td {
   padding: 8px;
   }
   #data-table-body td:nth-child(5) {
   font-size: 12px;
   }
</style>
</style>
<div id="tambah">
   <?php
      if (isset($_GET['success']) && $_GET['success'] == 'true') {
         echo '<p class="text-green-500">Postingan berhasil ditambahkan!</p>';
      }
      if (isset($_GET['edit']) && $_GET['edit'] == 'true') {
         echo '<p class="text-green-500">Postingan berhasil edit</p>';
      }
       if (isset($_GET['delete']) && $_GET['delete'] == 'true') {
         echo '<p class="text-red-500">Postingan berhasil dihapus!</p>';}
      ?>
</div>
<!-- Content -->
<!-- Add Data Button -->
<div class="container mx-auto my-8 p-8 bg-white rounded shadow-md float-right" style="width: 49%;">
   <h2 class="text-2xl font-semibold mb-4">Tambah Postingan</h2>
   <form action="includes/create.php" method="POST" class="max-w-lg mx-auto">
      <div class="mb-4">
         <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
         <input type="text" id="judul" placeholder="tulis judul na" name="judul" autocomplete="off"  required
            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
      </div>
      <div class="mb-4">
         <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
         <input type="text" id="gambar" placeholder="link gambar mo jammi upload file, sessai server " name="gambar" autocomplete="off" required
            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
      </div>
      <div class="mb-4">
         <label for="teks" class="block text-gray-700 text-sm font-bold mb-2">Teks:</label>
         <textarea id="teks" name="teks" autocomplete="off" required
            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
      </div>
      <div class="mb-4">
         <input type="submit" value="Tambah"
            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">
      </div>
   </form>
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
   <script>
      CKEDITOR.replace('teks');
   </script>
</div>
<div class="container mx-auto my-8 p-8 bg-white rounded shadow-md float-left" style="width: 50%;">
   <h2 class="text-2xl font-semibold mb-4">Data List</h2>
   <style>
      #cari{
      gap: 15px;
      display: flex;
      align-content: center;
      justify-content: center;
      align-items: center;
      }
   </style>
   <!-- Search Form -->
   <form action="" method="POST" class="mb-4" id="cari">
      <label for="search" class="block text-gray-700 text-sm font-bold ">Search:</label>
      <input type="text" id="search" name="search" autocomplete="off" placeholder="cari data cuy " class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">Search</button>
   </form>
   <table class="w-full mb-8">
      <thead>
         <tr>
            <th class="py-2 px-4 bg-gray-800 text-white">ID</th>
            <th class="py-2 px-4 bg-gray-800 text-white">Judul</th>
            <th class="py-2 px-4 bg-gray-800 text-white">Waktu</th>
            <th class="py-2 px-4 bg-gray-800 text-white">Gambar</th>
            <th class="py-2 px-4 bg-gray-800 text-white">Konten</th>
            <th class="py-2 px-4 bg-gray-800 text-white">Aksi</th>
         </tr>
      </thead>
      <tbody id="data-table-body">
         <?php 
            foreach ($postingan as $post) { 
               // Mendapatkan array kata dari teks
               $words = str_word_count($post['teks'], 1);
               
               // Mengambil 30 kata pertama
               $limitedWords = array_slice($words, 0, 10);
               
               // Menggabungkan kembali array kata menjadi string
               $limitedText = implode(' ', $limitedWords);
               $limitedText .= '...';
               ?>
         <tr>
            <td class="py-2 px-4"><?php echo $post['id']; ?></td>
            <td class="py-2 px-4"><?php echo $post['judul']; ?></td>
            <td class="py-2 px-4"><?php echo date('d F Y H:i', strtotime($post['waktu'])); ?></td>
            <td class="py-2 px-2" style="width: 100px; height: 100px; overflow: hidden;  border-radius: 10px;">
               <?php
                  $gambarPath = $post['gambar'];
                  if (file_exists($gambarPath)) {
                     // Display the image if it exists
                     echo '<img src="' . $gambarPath . '" alt="Post Image" class="object-cover w-full h-full">';
                  } else {
                     // Display a placeholder image or a message if the image doesn't exist
                     echo 'Tena Gambarna';
                  }
                  ?>
            </td>
            </td>
            <td class="py-2 px-4"><?php echo $limitedText; ?></td>
            <td class="py-2 px-4">
               <a href="d.php?page=edit&id=<?= $post['id']; ?>" class="text-blue-600">Edit</a>
               <a href="includes\delete.php?id=<?php echo $post['id'];?>" class="text-red-600 ml-2">Delete</a>
            </td>
            <?php }?>
         </tr>
      </tbody>
   </table>
</div>
<?php
   $conn->close();?>
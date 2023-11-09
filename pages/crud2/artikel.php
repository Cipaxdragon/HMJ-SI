
<!-- Daftar Artikel -->
<?php
         include_once "includes/read_artikel.php";
    
?>
      <style>
         .max-w-lg{
            max-width: 72rem;
         }
      </style>
      <!-- Content -->
   
         <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
            <!-- Add Data Button -->
            <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
               <div id="tambah">
               </div>
               <h2 class="text-2xl font-semibold mb-4">Tambah Postingan</h2>
               <form action="includes/create.php" method="POST" class="max-w-lg mx-auto">
                  <div class="mb-4">
                     <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                     <input type="text" id="judul" name="judul" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                  </div>
                  <div class="mb-4">
                     <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                     <input type="text" id="gambar" name="gambar" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                  </div>
                  <div class="mb-4">
                     <label for="teks" class="block text-gray-700 text-sm font-bold mb-2">Teks:</label>
                     <textarea id="teks" name="teks" required
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
            <h2 class="text-2xl font-semibold mb-4">Data List</h2>
            <table class="w-full mb-8">
               <thead>
                  <tr>
                     <th class="py-2 px-4 bg-gray-800 text-white">ID</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Title</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Date</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Image</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Text</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Action</th>
                  </tr>
               </thead>
               <tbody id="data-table-body">
                  <?php foreach ($postingan as $post) { 
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
                     <td class="py-2 px-4"><?php echo $post['waktu'] ;  ?></td>
                     <td class="py-2 px-2" style="width: 100px; height: 100px; overflow: hidden;  border-radius: 10px;">
                        <img src="<?php echo $post['gambar']; ?>" alt="Post Image" class="object-cover w-full h-full">
                     </td>
                     <td class="py-2 px-4"><?php echo $limitedText; ?></td>
                     <td class="py-2 px-4">
                        <a href="d.php?page=edit" class="text-blue-600">Edit</a>
                        <a href="includes\delete.php?id=<?php echo  $post['id'];?>" class="text-red-600 ml-2">Delete</a>
                     </td>
                     <?php }?>
                  </tr>
               </tbody>
            </table>
         </div>


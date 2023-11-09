<?php 
// Mengambil semua postingan
$sql = "SELECT * FROM kritik";
$result = $conn->query($sql);

// Memeriksa apakah ada postingan
if ($result->num_rows > 0) {
    $kritik = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $kritik = [];
}

?>
<style>
         .max-w-lg{
            max-width: 72rem;
         }
      </style>
      <!-- Content -->
         <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
            <!-- Add Data Button -->

            <h2 class="text-2xl font-semibold mb-4">Data Kritik</h2>
            <table class="w-full mb-8">
               <thead>
                  <tr>
                     <th class="py-2 px-1 bg-gray-800 text-white">Nama</th>
                     <th class="py-2 px-4 bg-gray-800 text-white">Teks</th>
                  </tr>
               </thead>
               <tbody id="data-table-body">
               <?php foreach ($kritik as $k) { ?>
                <tr>
                    <td class="py-2 px-4 "><?php echo $k['nama']?></td>
                    <td class="py-2 px-4 "><?php echo $k['saran']?></td>
                </tr>
                <?php } ?>
               </tbody>
            </table>
         </div>
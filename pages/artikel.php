<body>
   <style>
      #artikel{
      max-width: 650px;
      }
   </style>
   <div id="artikel" class="container-md mt-5">
      <h2>Daftar Artikel</h2>
      <?php
         $sql = "SELECT * FROM postingan  ORDER BY waktu DESC";
         $result = $conn->query($sql);
         
         // paginasi proses
         $jumlahArtikelPerHalaman = 1;
         $jumlahArtikel = $result->num_rows;
         $jumlahHalaman = ceil($jumlahArtikel / $jumlahArtikelPerHalaman);
         
         if (!isset($_GET['p'])) {
            $page = 1;
         } else {
            $page = $_GET['p'];
         }
         $halamanAktif = ($page - 1) * $jumlahArtikelPerHalaman;
         $sql = "SELECT * FROM postingan ORDER BY waktu DESC LIMIT $halamanAktif, $jumlahArtikelPerHalaman";
         $result = $conn->query($sql);
         
                 if ($result->num_rows > 0) :
                     while ($row = $result->fetch_assoc()) :?>
      <!-- Artikel pertama -->
      <div class="card mt-3">
         <img src="assets\image\Screenshot 2023-10-13 001123.png" class="card-img-top img-fluid" alt="Gambar Artikel 1">
         <div class="card-body">
            <h5 class="card-title"><?php echo $row["judul"]; ?></h5>
            <p class="card-text">                                    <?php
               // Menggunakan substr untuk memotong teks
               $teks = $row["teks"];
               $teks_pendek = (strlen($teks) > 100) ? substr($teks, 0, 100) . '...' : $teks;
               echo $teks_pendek;
               ?></p>
            <p class="card-text"><small class="text-muted">Tanggal: <?php echo $row["waktu"]; ?></small></p>
            <a href="bacaan.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
         </div>
      </div>
      <?php
         endwhile;
         else :
         echo "Tidak ada hasil.";
         endif;
         ?>
      <nav aria-label="Halaman artikel">
         <ul class="pagination justify-content-center mt-4">
            <?php if ($page > 1) : ?>
            <li class="page-item">
               <a class="page-link" href="?page=artikel&p=<?php echo $page - 1; ?>" aria-label="Sebelumnya">
               <span aria-hidden="true">&laquo;</span>
               </a>
            </li>
            <?php else : ?>
            <li class="page-item disabled">
               <span class="page-link">Sebelumnya</span>
            </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
               <a class="page-link" href="?page=artikel&p=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>
            <?php if ($page < $jumlahHalaman) : ?>
            <li class="page-item">
               <a class="page-link" href="?page=artikel&p=<?php echo $page + 1; ?>" aria-label="Berikutnya">
               <span aria-hidden="true">&raquo;</span>
               </a>
            </li>
            <?php else : ?>
            <li class="page-item disabled">
               <span class="page-link">Berikutnya</span>
            </li>
            <?php endif; ?>
         </ul>
      </nav>
   </div>
   <!-- Sertakan Bootstrap JS dan Popper.js (dibutuhkan untuk beberapa komponen Bootstrap) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<style>
  .judul {
    justify-content: center;
    align-items: flex-start;
    color: #1E357D;
    display: flex;
    flex-direction: column;
  }
</style>
<?php
  include_once "includes/p_berita.php";

// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        // Menampilkan struktur HTML dengan data dari database
?>
        <div class="artikel">
            <div class="kotak-artikel">
                <div class="gambar-artikel">
                    <img src="assets\image\<?php echo $row["gambar"]; ?>" alt=""> <!-- Ganti "gambar_url" dengan nama kolom yang sesuai di tabel database -->
                </div>
                <div class="text-artikel">
                    <a href="bacaan.php?id=<?php echo $row["id"];?>">
                        <div class="judul">
                            <h3><?php echo $row["judul"]; ?></h3> <!-- Ganti "judul" dengan nama kolom yang sesuai di tabel database -->
                            <div class="tanggal">
                                <?php echo $row["waktu"]; ?> <!-- Ganti "waktu" dengan nama kolom yang sesuai di tabel database -->
                            </div>
                        </div>
                    </a>
                    <p class="Penjelasan">
                        <?php
                        // Menggunakan substr untuk memotong teks
                        $teks = $row["teks"];
                        $teks_pendek = (strlen($teks) > 500) ? substr($teks, 0, 500) . '...' : $teks;
                        echo $teks_pendek;
                        ?>
                    </p>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "Tidak ada hasil.";
}
?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
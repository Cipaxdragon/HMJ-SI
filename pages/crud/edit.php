<?php
include_once "../../includes/koneksi.php";


$id = $_GET['id'];
$sql = "SELECT * FROM postingan WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $judul = $row['judul'];
    $kategori = $row['kategori'];
    $gambar = $row['gambar'];
    $teks = $row['teks'];

    // Menutup koneksi database
    $conn->close();
}
?>

<!-- Form untuk mengupdate postingan -->
<h2>Update Postingan</h2>
    <form action="../../includes/update.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?php echo $id; ?>" required><br>

        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="<?php echo $judul; ?>" required><br>

        <label for="kategori">Kategori:</label>
        <input type="number" id="kategori" name="kategori" value="<?php echo $kategori; ?>" required><br>

        <label for="gambar">Gambar:</label>
        <input type="text" id="gambar" name="gambar" value="<?php echo $gambar; ?>" required><br>

        <label for="teks">Teks:</label>
        <textarea id="teks" name="teks" required><?php echo $teks; ?></textarea><br>

        <input type="submit" value="Update">
    </form>
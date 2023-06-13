<h2>Tambah Postingan</h2>
<form action="./includes/create.php" method="POST">
    <label for="judul">Judul:</label>
    <input type="text" id="judul" name="judul" required><br>

    <label for="kategori">Kategori:</label>
    <input type="number" id="kategori" name="kategori" required><br>

    <label for="gambar">Gambar:</label>
    <input type="text" id="gambar" name="gambar" required><br>

    <label for="teks">Teks:</label>
    <textarea id="teks" name="teks" required></textarea><br>

    <input type="submit" value="Tambah">
</form>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('teks');
</script>

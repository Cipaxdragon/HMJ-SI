<!-- Daftar Artikel -->
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM postingan WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $judul = $row['judul'];
    $waktu = $row['waktu'];
    $gambar = $row['gambar'];
    $teks = $row['teks'];

    // Menutup koneksi database
    $conn->close();
}
?>
<style>
    .max-w-lg {
        max-width: 72rem;
    }
</style>

<!-- Content -->

<div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
    <!-- Add Data Button -->
    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
        <div id="tambah">
        </div>
        <h2 class="text-2xl font-semibold mb-4">Edit Postingan</h2>
        <form action="includes/update.php" method="POST" class="max-w-lg mx-auto">
           <div class="mb-4">
               <label for="id" class="block text-gray-700 text-sm font-bold mb-2">ID:</label>
               <input type="text" id="judul" name="id" value="<?php echo $id; ?>" readonly
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
           </div>
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                <input type="text" id="judul" name="judul" value="<?php echo $judul; ?>" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>     
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                <input type="text" id="gambar" name="gambar" value="<?php echo $gambar; ?>" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="Waktu" class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                <input type="date" id="waktu" name="waktu"   value="<?php echo $waktu; ?>" required 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="teks" class="block text-gray-700 text-sm font-bold mb-2">Teks:</label>
                <textarea id="teks" name="teks" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"><?php echo $teks; ?></textarea>
            </div>
            <div class="mb-4">
                <input type="submit" value="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('teks');
        </script>
    </div>
</div>

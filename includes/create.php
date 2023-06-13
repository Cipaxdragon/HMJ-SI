<?php


// Pastikan form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $gambar = $_POST["gambar"];
    $teks = $_POST["teks"];
    $waktu = date('Y-m-d H:i:s');
    
        include_once "koneksi.php";
   

    // Menambahkan postingan ke database
    $sql = "INSERT INTO postingan (judul, kategori, gambar, teks, waktu,id)
            VALUES ('$judul', '$kategori', '$gambar', '$teks', '$waktu', '')";

    if ($conn->query($sql) === TRUE) {
        echo "Postingan berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi database
    $conn->close();
}
?>

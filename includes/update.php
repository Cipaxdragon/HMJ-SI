<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $gambar = $_POST["gambar"];
    $teks = $_POST["teks"];

    include_once "koneksi.php";

    // Mengupdate postingan di database
    $sql = "UPDATE postingan SET judul='$judul', kategori='$kategori', gambar='$gambar', teks='$teks'
            WHERE id=$id";
    include_once "koneksi.php";
    if ($conn->query($sql) === TRUE) {
        echo "Postingan berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi database


}
?>

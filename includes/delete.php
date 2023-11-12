<?php
// Ambil ID postingan dari parameter URL
$id = $_GET["id"];

include_once "koneksi.php";
// Memeriksa koneksi


// Menghapus postingan berdasarkan ID
$sql = "DELETE FROM postingan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../d.php?delete=true");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>

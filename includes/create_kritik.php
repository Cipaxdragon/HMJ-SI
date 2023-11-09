<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $saran = $_POST["saran"];
    
        include_once "koneksi.php";

    // Menambahkan postingan ke database
    $sql = "INSERT INTO `kritik`(`nama`, `saran`) VALUES ('$nama','$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Kritik Berhasil Di Tambahkan";
        header("Location: ../index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
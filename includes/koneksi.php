<?php 
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hmj-si";
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>
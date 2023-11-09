<?php
 include_once "includes/koneksi.php";

// Mengambil data admin
$sql = "SELECT * FROM admin ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $us = $row["username"];
    $pw = $row["password"];
}
session_start();
// Periksa apakah pengguna sudah login, jika ya, alihkan ke halaman dashboard
if(isset($_SESSION['username'])){
    header("Location: d.php");
    exit;
}


// Periksa apakah form login disubmit
if(isset($_POST['submit'])){
    // Periksa username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Jika login berhasil, set session dan alihkan ke halaman dashboard
    if($username == $us && $password == $pw){
        $_SESSION['username'] = $username;
        header("Location: d.php");
        exit;
    } else {
        $error = "Salah Ki";
    }
}
?>

<?php
session_start();

// Periksa apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if(!isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php
    include_once "includes/koneksi.php";
        include_once "pages/crud/read.php";
        include_once "pages/crud/create.php";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>

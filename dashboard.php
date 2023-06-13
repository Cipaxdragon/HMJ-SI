<?php
session_start();

// Periksa apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if(!isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $username; ?>!</h2>
    <p>Ini adalah halaman dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>

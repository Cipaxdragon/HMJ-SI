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
    header("Location: dashboard.php");
    exit;
}

// Periksa apakah form login disubmit
if(isset($_POST['submit'])){
    // Periksa username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: Lakukan validasi dan verifikasi login ke database Anda di sini

    // Jika login berhasil, set session dan alihkan ke halaman dashboard
    if($username == $us && $password == $pw){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Salah Ki";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="admin.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

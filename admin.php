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
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Set a light background color */
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px; /* Adjust the top margin for vertical centering */
            border: 1px solid #ced4da; /* Add a border */
            padding: 20px;
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            background-color: #ffffff; /* Optional: Set a background color */
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 login-container">
                <h2 class="text-center mb-4">Login Bos</h2>
                <?php if(isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        Salah i pass na
                    </div>
                <?php } ?>
                <form method="POST" >
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

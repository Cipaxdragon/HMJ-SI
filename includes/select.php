<?php

// Mengambil semua postingan
$sql = "SELECT * FROM postingan
ORDER BY waktu DESC;
";
$result = $conn->query($sql);

// Memeriksa apakah ada postingan
if ($result->num_rows > 0) {
    $postingan = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $postingan = [];
}

// Menutup koneksi database
$conn->close();
?>


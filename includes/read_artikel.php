<?php
// Mengambil semua postingan
$sql = "SELECT * FROM postingan ORDER BY waktu DESC;
";
$result = $conn->query($sql);

// Memeriksa apakah ada postingan
if ($result->num_rows > 0) {
    $postingan = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $postingan = [];
}



function getAllArtikel()
{
    global $conn;

    // Mengambil semua postingan
    $sql = "SELECT * FROM postingan ORDER BY waktu DESC";
    $result = $conn->query($sql);

    // Memeriksa apakah ada postingan
    if ($result->num_rows > 0) {
        $postingan = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $postingan = [];
    }

    return $postingan;
}

function searchArtikel($search)
{
    global $conn;

    // Implement your search logic here
    // Example: Searching by 'judul' or 'teks'
    $sql = "SELECT * FROM postingan WHERE judul LIKE '%$search%' OR teks LIKE '%$search%' ORDER BY waktu DESC";
    $result = $conn->query($sql);

    // Memeriksa apakah ada hasil pencarian
    if ($result->num_rows > 0) {
        $postingan = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $postingan = [];
    }

    return $postingan;
}


// Menutup koneksi database
?>


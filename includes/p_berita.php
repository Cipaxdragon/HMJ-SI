<?php 
    $sql = "SELECT * FROM postingan where kategori = 4 ORDER BY waktu DESC";
    $result = $conn->query($sql);
?>

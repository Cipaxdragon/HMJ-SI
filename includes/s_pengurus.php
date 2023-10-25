<?php 
    $sql = "SELECT * FROM pengurus ORDER BY divisi, jabatan;";
    $result = $conn->query($sql);
?>



$sql = "SELECT * FROM pengurus WHERE jabatan=3 and divisi=1 ORDER BY divisi, jabatan;"
    $result = $conn->query($sql);
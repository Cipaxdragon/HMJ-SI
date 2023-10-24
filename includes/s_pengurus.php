<?php 
    $sql = "SELECT nama, divisi, jabatan FROM pengurus ORDER BY divisi, jabatan;";
    $result = $conn->query($sql);

    
?>
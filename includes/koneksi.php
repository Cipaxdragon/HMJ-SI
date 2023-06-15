

<?php 
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hmj-si";
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>



<!-- 

https://hayemje.000webhostapp.com/index.php?page=beranda
<?php 
    // Koneksi ke database
    $servername = "localhost";
    $username = "id20912066_kominfo";
    $password = "Anjaymabar123!";
    $dbname = "id20912066_hmjsi";
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?> -->
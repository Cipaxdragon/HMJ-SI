<?php
include_once "includes/koneksi.php";
include_once "layouts/header.php";

if (isset($_GET['id'])) {
    $articleId = $_GET['id'];
    $query = "SELECT * FROM postingan WHERE id = $articleId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        // Handle error, misalnya redirect ke halaman error
        header("Location: error.php");
        exit();
    }
} else {
    // Handle jika parameter id tidak ada, misalnya redirect ke halaman error
    header("Location: error.php");
    exit();
}
?>


<style>
.erwere{
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    align-content: center;
}
.tanggal_bacaan{
    width: 100%;
    display: flex;
    justify-content: flex-start;
}
</style>
<div class="erwere">
    <div>
        <h1><?php echo $row["judul"]; ?></h1>
    </div>
    <div class="gambar_bacaan">
        <img src="assets/image/<?php echo $row["gambar"]; ?>" alt="">
    </div>
    <div class="tanggal_bacaan">
    <?php echo $row["waktu"]; ?>
    </div>
    <div>
    <?php echo $row["teks"]; ?>
    </div>
</div>
<?php include_once "layouts/footer.php";?>
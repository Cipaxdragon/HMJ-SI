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
    <div class="container-sm mx-auto mt-5 ">
            <h1 class="text-center"><?php echo $row["judul"]; ?></h1>
        <div class="container-fluid">
            <img class="rounded w-100 d-block " src="<?php echo $row["gambar"]; ?>" alt="">
        </div>
        <div class="container p-5 ">
            <div class="tanggal_bacaan">
            <?php echo $row["waktu"]; ?>
            </div>
            <?php echo $row["teks"]; ?>

        </div>
    </div>
<?php include_once "layouts/footer.php";?>
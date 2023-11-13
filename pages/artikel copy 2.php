<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold mb-8">Daftar Postingan Artikel</h1>
        <div class="row">
            <?php
            include_once "includes/p_berita.php";

            if ($result->num_rows > 0) :
                while ($row = $result->fetch_assoc()) :?>
                    <!-- Artikel 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets\image\Screenshot 2023-10-11 131959.png" alt="Gambar Artikel 1" class="card-img-top mb-4 rounded-lg">
                            <div class="card-body">
                                <h2 class="card-title text-xl font-semibold mb-2"><?php echo $row["judul"]; ?></h2>

                                <p class="card-text text-gray-600">
                                    <?php
                                    // Menggunakan substr untuk memotong teks
                                    $teks = $row["teks"];
                                    $teks_pendek = (strlen($teks) > 100) ? substr($teks, 0, 100) . '...' : $teks;
                                    echo $teks_pendek;
                                    ?>
                                </p>
                                <time class="text-gray-400 block mt-2" datetime="<?php echo $row["waktu"]; ?>">14 November 2023</time>
                                <a href="bacaan.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                echo "Tidak ada hasil.";
            endif;
            ?>
            <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>

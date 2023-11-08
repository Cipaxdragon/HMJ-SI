<?php
    include_once "./includes/select.php";
    include_once "./layouts/header_admin.php"
?>
<div class="container">
        <h2>Daftar Postingan</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Judul</th>
                    <!-- <th>Kategori</th> -->
                    <th>Gambar</th>
                    <th>Teks</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($postingan as $post) { ?>
                <tr>
                    <td><?php echo $post['judul']; ?></td>
                    <td><?php echo $post['gambar']; ?></td>
                    <td><?php echo $post['teks']; ?></td>
                    <td><?php echo $post['waktu']; ?></td>
                    <td>
                        <a href="pages/crud/edit.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="includes/delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
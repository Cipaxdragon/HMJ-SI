<?php
    include_once "./database/select.php"
?>
<h2>Daftar Postingan</h2>
    <table>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Teks</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($postingan as $post) { ?>
        <tr>
            <td><?php echo $post['judul']; ?></td>
            <td><?php echo $post['kategori']; ?></td>
            <td><?php echo $post['gambar']; ?></td>
            <td><?php echo $post['teks']; ?></td>
            <td><?php echo $post['waktu']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $post['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $post['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
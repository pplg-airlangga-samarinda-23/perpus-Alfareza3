<?php 
include __DIR__ . '/../koneksi.php';

$sql = "SELECT * FROM buku";
$books = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku</title>
</head>
<body>
<h1>Data Buku</h1>
<a href="create.php">Tambah</a>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($books as $book): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($book['judul']) ?></td>
            <td><?= htmlspecialchars($book['penulis']) ?></td>
            <td><?= htmlspecialchars($book['stok']) ?></td>
            <td>
                <a href="edit.php?id=<?= $book['id_buku'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $book['id_buku'] ?>"
                   onclick="return confirm('Yakin hapus data ini?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

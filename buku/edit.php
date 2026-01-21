<?php
include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (!isset($_GET['id'])) {
        die("ID buku tidak ditemukan");
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM buku WHERE id_buku = ?";
    $result = $koneksi->execute_query($sql, [$id]);
    $book = $result->fetch_assoc();

    if (!$book) {
        die("Data buku tidak ditemukan");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id      = $_POST['id_buku'];
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $stok    = $_POST['stok'];
    $sql = "UPDATE buku SET judul = ?, penulis = ?, stok = ? WHERE id_buku = ?";
    $result = $koneksi->execute_query($sql, [$judul, $penulis, $stok, $id]);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        die("Gagal update data");
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
<h1>Edit Buku</h1>
<form method="post">
    <input type="hidden" name="id_buku" value="<?= htmlspecialchars($book['id_buku']) ?>">
    <div>
        <label>Judul</label><br>
        <input type="text" name="judul" required
               value="<?= htmlspecialchars($book['judul']) ?>">
    </div>
    <div>
        <label>Penulis</label><br>
        <input type="text" name="penulis" required
               value="<?= htmlspecialchars($book['penulis']) ?>">
    </div>
    <div>
        <label>Stok</label><br>
        <input type="number" name="stok" required
               value="<?= htmlspecialchars($book['stok']) ?>">
    </div>
    <br>
    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
</form>
</body>
</html>

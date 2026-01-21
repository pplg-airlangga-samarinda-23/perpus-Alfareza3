<?php 
include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $stok    = $_POST['stok'];

    $sql = "INSERT INTO buku (judul, penulis, stok) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssi", $judul, $penulis, $stok);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
    <body>
    <h1>Tambah Buku</h1>
    <form method="post">
        <div class="form-item">
            <label for="judul">Judul</label><br>
            <input type="text" name="judul" id="judul" required>
        </div>
        <div class="form-item">
            <label for="penulis">Penulis</label><br>
            <input type="text" name="penulis" id="penulis" required>
        </div>
        <div class="form-item">
            <label for="stok">Stok</label><br>
            <input type="number" name="stok" id="stok" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
    </body>
</html>

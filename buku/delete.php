<?php
include __DIR__ . '/../koneksi.php';

if (!isset($_GET['id'])) {
    die("ID buku tidak ditemukan");
}

$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE id_buku = ?";
$result = $koneksi->execute_query($sql, [$id]);

if ($result) {
    header("Location: index.php");
    exit();
} else {
    die("Gagal menghapus data");
}

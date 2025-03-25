<?php
include_once("koneksi.php");

// Cek apakah ada parameter ID di URL
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];
    
    // Query untuk menghapus buku berdasarkan ID
    $query = "DELETE FROM tb_buku WHERE id_buku = '$id_buku'";
    $hasil = mysqli_query($conn, $query);
    
    // Cek apakah query berhasil
    if ($hasil) {
        echo "<script>alert('Buku berhasil dihapus!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus buku: " . mysqli_error($conn) . "'); window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('ID buku tidak valid!'); window.location.href = 'indexcreateurut.php';</script>";
}
?>

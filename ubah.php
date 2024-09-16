<?php
require_once "koneksi.php";

// ID buku yang akan diupdate
$id = $_POST['id'];
$kode_buku = $_POST['kode_buku'];
$nama_buku = $_POST['nama_buku'];
$tanggal_terbit = $_POST['tanggal_terbit'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$kondisi = $_POST['kondisi'];
$sinopsis = $_POST['sinopsis'];

// Query untuk memperbarui data
$sql = "UPDATE buku 
        SET kode_buku='$kode_buku', 
            nama_buku='$nama_buku', 
            tanggal_terbit='$tanggal_terbit', 
            penulis='$penulis', 
            penerbit='$penerbit', 
            kondisi='$kondisi', 
            sinopsis='$sinopsis' 
        WHERE id='$id'";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Redirect to the data display page
header("Location: index.php?page=tampil-data");
exit(); // Ensure no further code is executed after redirect
?>

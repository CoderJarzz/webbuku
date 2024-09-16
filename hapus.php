<?php
require_once "koneksi.php";
// ID siswa yang akan diupdate
$id = $_GET['id'];

// Query untuk memperbarui data
$sql = "DELETE FROM buku WHERE id=$id";
if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil diperbarui";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

header("Location:index.php?page=tampil-data");
?>
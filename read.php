<?php
require_once "koneksi.php";
// Query untuk mengambil data
$sql = "SELECT id, kode_buku, nama_buku, tanggal_terbit, penulis, penerbit, kondisi, sinopsis FROM siswa";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0) {
// Menampilkan data setiap baris
while($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["id"]. " - Kode Buku: " . $row["kode_buku"]. " - Nama Buku: " . $row["nama_buku"]. " - Tanggal Terbit: " . $row["tanggal_terbit"]."Penulis: " . $row["penulis"]. 
"Penerbit: " . $row["penerbit"]."Kondisi: " . $row["kondisi"]."Sinopsis: " . $row["sinopsis"].
"<br>";
}
} else {
echo "Tidak ada data";
}
?>
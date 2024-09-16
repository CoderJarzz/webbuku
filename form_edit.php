<?php
require_once "koneksi.php";

// Get the ID of the record to edit
$id = $_GET['id'];

// Query to get the data for the specified ID
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");

// Fetch the data as an associative array
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <link rel="stylesheet" href="apk.css">
</head>
<body>
<h2 align="center">Aplikasi Perpustakaan</h2>
<hr>
    <div class="nav">
        <nav>
            <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="tampil_data.php">Tampil Data</a></li>
    <li><a href="form_tambah.php">Tambah Data</a></li>
</ul>
</nav>
</div>
<div class="content">
<center>
    <h1>Edit Data Buku</h1>
</center>
<form method="post" action="ubah.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    
    <b>Kode Buku</b><br>
    <input type="text" name="kode_buku" value="<?= $data['kode_buku'] ?>" maxlength="7" required><br>

    <b>Nama Buku</b><br>
    <input type="text" name="nama_buku" value="<?= $data['nama_buku'] ?>" required><br>

    <b>Tanggal Terbit</b><br>
    <input type="date" name="tanggal_terbit" value="<?= $data['tanggal_terbit'] ?>" required><br>

    <b>Penulis</b><br>
    <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br>

    <b>Penerbit</b><br>
    <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" required><br>

    <b>Kondisi</b><br>
    <select name="kondisi" required>
        <option value="Bad" <?= ($data['kondisi'] == "Bad") ? "selected" : "" ?>>Bad</option>
        <option value="Good" <?= ($data['kondisi'] == "Good") ? "selected" : "" ?>>Good</option>
        <option value="Best" <?= ($data['kondisi'] == "Best") ? "selected" : "" ?>>Best</option>
    </select><br>

    <b>Sinopsis</b><br>
    <textarea name="sinopsis" required><?= $data['sinopsis'] ?></textarea><br>

    <button type="submit">Simpan</button>
</form><br> 
<?php
session_start();

$previous_page = isset($_SESSION['previous_page']) ? $_SESSION['previous_page'] : 'javascript:history.back()';
?>

</div>    
</body>
</html>

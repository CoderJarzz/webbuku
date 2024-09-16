<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="apk.css">
    <script>
        function validateForm() {
            var kodeBuku = document.forms["bukuForm"]["kode_buku"].value;
            if (kodeBuku.length < 7) {
                alert("Kode Buku must be exactly 7 characters.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
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
    <h1>Tambah Data Buku</h1>
</center>
    <form name="bukuForm" method="post" action="tambah.php" onsubmit="return validateForm()">
        <b>Kode Buku</b><br>
        <input type="text" name="kode_buku" maxlength="7" required><br>
<br>
        <b>Nama Buku</b><br>
        <input type="text" name="nama_buku" required><br>
<br>
        <b>Tanggal Terbit</b><br>
        <input type="date" name="tanggal_terbit" required><br>
<br>
        <b>Penulis</b><br>
        <input type="text" name="penulis" required><br>
<br>
        <b>Penerbit</b><br>
        <input type="text" name="penerbit" required><br>
<br>
        <b>Kondisi</b><br>
        <select name="kondisi" required>
            <option value="Bad">Bad</option>
            <option value="Good">Good</option>
            <option value="Best">Best</option>
        </select><br>
<br>
        <b>Sinopsis</b><br>
        <textarea name="sinopsis" required></textarea><br>

        <button type="submit">Tambah</button>
    </form><br>
    </div> 
</body>
</html>

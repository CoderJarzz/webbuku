<?php
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Buku</title>
    <link rel="stylesheet" href="apk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <h1>Tampil Data Buku</h1>
    <table border="1" cellpadding="5" cellspacing='0'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Buku</th>
                <th>Nama Buku</th>
                <th>Tanggal Terbit</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Kondisi</th>
                <th>Sinopsis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM buku");
                if(mysqli_num_rows($query) > 0){
                    // Display records
                    $no = 0;
                    while($data = mysqli_fetch_assoc($query)){
                        $no++;
                        ?>
                            <tr>
                                <td align="center"><?= $no ?></td>
                                <td><?= $data['kode_buku'] ?></td>
                                <td><?= $data['nama_buku'] ?></td>
                                <td><?= $data['tanggal_terbit'] ?></td>
                                <td><?= $data['penulis'] ?></td>
                                <td><?= $data['penerbit'] ?></td>
                                <td><?= $data['kondisi'] ?></td>
                                <td><?= $data['sinopsis'] ?></td>
                                <td align="center" class="action-icons">
                                <a href="hapus.php?id=<?= $data['id'] ?>"
                                        onclick="return confirm('Yakin hapus?')">
                                            <i class="fas fa-trash-alt" title="Hapus"></i>
                                        </a>
                                        &bull;
                                        <a href="form_edit.php?id=<?= $data['id'] ?>"
                                        onclick="return confirm('Yakin mau edit?')">
                                            <i class="fas fa-edit" title="Edit"></i>
                                        </a>
                                    </td>
                            </tr>
                        <?php
                    }
                } else {
                    echo "
                    <tr>
                        <td colspan='9'>Maaf, Data tidak ada</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>

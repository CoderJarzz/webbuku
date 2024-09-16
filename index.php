<?php
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
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
<h1><b>SELAMAT DATANG DI <br> BOOK STAGE</b></h1>
<p class="paraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nam impedit velit numquam ipsum, <br> nulla eaque quidem qui quae dignissimos, sapiente quas. Corporis ea, <br>dolore sequi quos nemo incidunt commodi?</p>
<div class="next">
<a href="tampil_data.php">Lihat Koleksi Buku -></a>
</div>
<div class="logo"><img src="books-1673578_1280-removebg-preview.png"></div>
    <!-- Konten disini -->
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                require_once "home.php";
                break;
            case 'tampil-data':
                require_once "tampil_data.php";
                break;
            case 'tambah-data':
                require_once "form_tambah.php";
                break;
            case 'edit-data':
                require_once "form_edit.php";
                break;    
            default:
                require_once "404.php";
                break;
        }
    } else {
        require_once "footer.php";
    }
    ?>
</body>
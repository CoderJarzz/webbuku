<?php
    require_once "koneksi.php";

    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $tanggal_terbit = $_POST['tanggal_terbit'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $kondisi = $_POST['kondisi'];
    $sinopsis = $_POST['sinopsis'];
    

    $sql = "INSERT INTO buku (kode_buku, nama_buku, tanggal_terbit, penulis, penerbit, kondisi, sinopsis)
        VALUES ('$kode_buku', '$nama_buku', '$tanggal_terbit', '$penulis', '$penerbit', '$kondisi', '$sinopsis')";

    $query = mysqli_query($koneksi,$sql);

    if($query){
        echo "data berhasil ditambahkan";
    }else{
        echo"Error :".mysqli_error($koneksi);
    }

    header("Location:index.php?page=tampil-data");

?>
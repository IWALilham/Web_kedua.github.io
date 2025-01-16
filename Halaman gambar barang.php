<?php 
require "function.php";

$id = $_GET["id"];

$penjual = action("SELECT * FROM barang_jualan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambar jualan</title>
</head>

<body>
    <div>
    <div><a href="Halaman index.php">Beranda</a></div>
    <div><a href="Barang jualan.php">Barang Jualan</a></div>
    <div><a href="Halaman jasa.php">Jasa</a></div>
    <div><a href="Halaman tentang kami.php">Tentang Kami</a></div>
    <div><a href="Halaman prestasi.php">Prestasi</a></div>
    <div><a href="Halaman anggota.php">Anggota</a></div>
    <div><a href="Halaman galeri.php">Portofolio</a></div>
    </div>

    <div>
        <img src="img/<?= $penjual["Gambar"] ?>" alt="No image">
        <p><?= $penjual["Nama_barang"] ?></p>
        <p><?= $penjual["Deskripsi"] ?></p>
        <p>Jumlah stok : <?= $penjual["Jumlah"] ?></p>
        <p>Harga : <?= $penjual["Harga"] ?></p>
        <div class="">
            <div class=""><a href="Registrasi pembelian.php">Pesan</a></div>
        </div>
    </div>
</body>

</html>
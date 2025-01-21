<?php
require "function.php";
$galeri = action("SELECT * FROM galeri ORDER BY id DESC")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galeri x</title>
</head>

<body>
    <div>
        <div><a href="Halaman index.php">Beranda</a></div>
        <div><a href="Barang jualan.php">Barang Jualan</a></div>
        <div><a href="Halaman jasa.php">Jasa</a></div>
        <div><a href="Halaman tentang kami.php">Tentang Kami</a></div>
        <div><a href="Halaman prestasi.php">Prestasi</a></div>
        <div><a href="Halaman anggota.php">Anggota</a></div>
        <div><a href="Halaman galeri.php">galeri</a></div>
    </div>
    <div>
        <?php foreach ($galeri as $glr): ?>
            <div>
                <img src="img_galeri/<?= $glr["Gambar"] ?>" alt="No Image">
                <p><?= $glr["Deskripsi"] ?></p>
                <p><?= $glr["Tanggal"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
<?php
require "function.php";
$anggota = action("SELECT * FROM anggota ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman anggota x</title>
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

<!-- gasan gambar lawan keterangan anggota -->
    <div>
        <?php foreach ($anggota as $agt): ?>
            <div><img src="<?=$agt ["Gambar"] ?>" alt=""></div>
            <p><?= $agt["Nama"] ?></p>
            <p><?=$agt["Jabatan"]?></p>
            <p><?=$agt["Riwayat"]?></p>
        <?php endforeach; ?>
    </div>
</body>

</html>
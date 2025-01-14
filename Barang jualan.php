<?php
require "function.php";

$barang = action("SELECT * FROM barang_jualan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Jualan x</title>
</head>

<body>
    <div>
        <div><a href="Halaman index.php">Beranda</a></div>
        <div><a href="Barang jualan.php">Barang Jualan</a></div>
        <div><a href="Halaman jasa.php">Jasa</a></div>
        <div><a href="Halaman tentang kami.php">Tentang Kami</a></div>
        <div><a href="Halaman prestasi.php">Prestasi</a></div>
        <div><a href="Halaman anggota.php">Anggota</a></div>
        <div><a href="Halaman portofolio.php">Portofolio</a></div>
    </div>
    <!-- bagian pembukaan barang jualan  -->
    <div></div>

    <!-- bagian barangnya  -->
    <div class="">
        <?php foreach ($barang as $dj): ?>
            <div>>
                <a href="Halaman gambar.php?id=<?= $dj['id'] ?>">
                    <img src="img/<?= $dj['Gambar'] ?>" alt="Gambar Barang">
                </a>
                <div class="">
                    <p class=""><?= $dj['Nama_barang'] ?></p>
                    <p class="">Rp<?= number_format($dj['Harga'], 0, ',', '.') ?></p>
                    <p class="">Stok :<?= $dj['Jumlah'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
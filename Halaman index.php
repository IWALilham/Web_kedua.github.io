<?php
require "function.php";
$barang = action("SELECT * FROM barang_jualan ORDER BY id DESC ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman index</title>
</head>

<body>
    <div><a href="Halaman index.php">Beranda</a></div>
    <div><a href="Barang jualan.php">Barang Jualan</a></div>
    <div><a href="Halaman jasa.php">Jasa</a></div>
    <div><a href="Halaman tentang kami.php">Tentang Kami</a></div>
    <div><a href="Halaman prestasi.php">Prestasi</a></div>
    <div><a href="Halaman anggota.php">Anggota</a></div>
    <div><a href="Halaman galeri.php">Galeri</a></div>

    <!-- untuk content perkenalan -->
    <div>
        <img src="" alt=""><!-- logo toko -->
        <p></p><!-- untuk kata-kata penkenalan -->
    </div>

    <!-- gasan barang barang dihalaman index-->
    <div class="">
        <?php foreach ($barang as $dj): ?>
            <div>>
                <a href="Halaman gambar barang.php?id=<?= $dj['id'] ?>">
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

    <!-- Gasan sebagai galeri  -->
    <div>
        <img src="img_galeri_sementara/IMG-20250116-WA0003.jpg" class="gambar1">
        <img src="img_galeri_sementara/IMG-20250116-WA0012.jpg" class="gambar2">
        <img src="img_galeri_sementara/IMG-20250116-WA0005.jpg" class="gambar3">
        <img src="img_galeri_sementara/IMG-20250116-WA0010.jpg" class="gambar4">
        <img src="img_galeri_sementara/IMG-20250116-WA0013.jpg" class="gambar5">
    </div>
    <button><a href="Halaman galeri.php">Tampilkan lebih</a></button>

</body>

</html>
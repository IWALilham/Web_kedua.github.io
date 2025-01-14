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
    <div><a href="Halaman portofolio.php">Portofolio</a></div>

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
        <img src="" class="gambar1">
        <img src="" class="gambar2">
        <img src="" class="gambar3">
        <img src="" class="gambar4">
        <img src="" class="gambar5">
    </div>
    <button>Tampilkan lebih</button>

    <!-- Bagian akhir untuk media sosial dan gasan menghubungi -->
    <div></div><!-- bagian media sosial -->
    <div></div><!-- bagian nama anggota -->
    <div></div><!-- bagian cara menghubungi atau nomor telpon yang bisa dihubungi -->

</body>

</html>
<?php
require "function.php";
$prestasi = action("SELECT * FROM prestasi ORDER BY DESC")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi x</title>
</head>

<body>
    <div>
        <div>
            <a href="Halaman index.php">Beranda</a>
        </div>
        <div>
            <a href="Barang jualan.php">Barang Jualan</a>
        </div>
        <div>
            <a href="Halaman jasa.php">Jasa</a>
        </div>
        <div>
            <a href="Halaman tentang kami.php">Tentang Kami</a>
        </div>
        <div>
            <a href="Halaman prestasi.php">Prestasi</a>
        </div>
        <div>
            <a href="Halaman anggota.php">Anggota</a>
        </div>
        <div>
            <a href="Halaman portofolio.php">Portofolio</a>
        </div>
    </div>

    <div>
        <?php foreach ($prestasi as $pts): ?>
            <img src="<?php echo $pts["Gambar"] ?>" alt="No image">
            <p><?php echo $pts["Nama"] ?></p>
            <p><?php echo $pts["Prestasi"] ?></p>
            <p><?php echo $pts["Deskripsi"] ?></p>
            <p><?php echo $pts["Tanggal"] ?></p>
        <?php endforeach; ?>
    </div>
</body>

</html>
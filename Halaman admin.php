<?php
session_start();
require "function.php";
if (!isset($_SESSION["Login"])) {
    header("Location: Login admin.php");
    exit;
}

$orang = action("SELECT * FROM pembeli ORDER BY id DESC ");

if (isset($_POST["submit_1"])) {
    if (tambah_barang($_POST) > 0) {
        echo "
        <script>
        alert ('Data berhasil ditambahkan!');
        </script>
    ";
    } else {
        echo "
    <script>
        alert ('Data gagal ditambahkan!');
        </script>
    ";
    }

}
if (isset($_POST["submit_2"])) {
    if (tambah_anggota($_POST) > 0) {
        echo "
        <script>
        alert ('Data berhasil ditambahkan!');
        </script>
    ";
    } else {
        echo "
    <script>
        alert ('Data gagal ditambahkan!');
        </script>
    ";
    }

}

if (isset($_POST["submit_3"])) {
    if (tambah_galeri($_POST) > 0) {
        echo "
        <script>
        alert ('Data berhasil ditambahkan!');
        </script>
    ";
    } else {
        echo "
    <script>
        alert ('Data gagal ditambahkan!');
        </script>
    ";
    }    
}

if (isset($_POST["submit_4"])) {
    if (tambah_prestasi($_POST) > 0) {
        echo "
        <script>
        alert ('Data berhasil ditambahkan!');
        </script>
    ";
    } else {
        echo "
    <script>
        alert ('Data gagal ditambahkan!');
        </script>
    ";
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ad_ja_x</title>
</head>

<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat pengiriman</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Pesan</th>
        </tr>

        <?php foreach ($orang as $org): ?><!-- untuk pengulangan -->
            <tr>
                <td><?= $org["Nama"] ?></td>
                <td><?= $org["Nomor"] ?></td>
                <td><?= $org["Alamat"] ?></td>
                <td><?= $org["Barang"] ?></td>
                <td><?= $org["Jumlah"] ?></td>
                <td><?= $org["Pesan"] ?></td>
            </tr>
        <?php endforeach; ?><!-- untuk pengulangan -->
    </table>

    <div>
        <h1>Tambah data barang jualan</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="Nama_barang">Nama Barang</label>
                    <input type="text" name="Nama_barang" id="Nama_barang" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Deskripsi">Penjelasan</label>
                    <input type="text" name="Deskripsi" id="Deskripsi" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Harga">Harga</label>
                    <input type="number" name="Harga" id="Harga" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Jumlah">Jumlah Barang</label>
                    <input type="number" name="Jumlah" id="Jumlah" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Gambar">Gambar :</label>
                    <input type="file" name="Gambar" id="Gambar" autocomplete="off">
                </li>
                <br>
                <button type="submit" name="submit_1">Tambah data !</button>

            </ul>
        </form>
    </div>
    <div>
        <h1>Tambah data anggota</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="Nama_anggota">Nama anggota</label>
                    <input type="text" name="Nama_anggota" id="Nama_anggota" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Jabatan">Jabatan</label>
                    <input type="text" name="Jabatan" id="Jabatan" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Prestasi">Prestasi</label>
                    <input type="text" name="Prestasi" id="Prestasi" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Riwayat">Riwayat karir</label>
                    <input type="text" name="Riwayat" id="Riwayat" autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="Gambar">Gambar :</label>
                    <input type="file" name="Gambar" id="Gambar" autocomplete="off">
                </li>
                <br>
                <button type="submit" name="submit_2">Tambah data !</button>

            </ul>
        </form>
    </div>
<h1>Tambah data portofolio</h1>
    <div>
        <ul>
        <form action="" method="post" enctype="multipart/form-data">
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="file" name="Gambar" id="Gambar" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" name="Deskripsi" id="Deskripsi" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="Tanggal">Tanggal</label>
                <input type="date" name="Tanggal" id="Tanggal" autocomplete="off">
            </li>
            <br>
                <button type="submit" name="submit_3">Tambah data !</button>
        </ul>
        </form>
    </div>
    <h1>Tambahan data prestasi</h1>
    <div>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="file" name="Gambar" id="Gambar" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" name="Deskripsi" id="Deskripsi" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="Tanggal">Tanggal</label>
                <input type="date" name="Tanggal" id="Tanggal" autocomplete="off">
            </li>
            <br>
                <button type="submit" name="submit_4">Tambah data !</button>
        </ul>
        </form>
    </div>
</body>

</html>
<?php 
require 'function.php';
if (isset($_POST["register"])){

    if(Registrasi($_POST) > 0) {
        echo "<script>
        alert('Pembeli baru berhasil ditambahkan');
        </script>";
    }else{
        echo mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasion</title>
<link rel="stylesheet" href="Registrasi.css">
</head>
<body>
<h1>Registrasi Admin</h1>
<form action="" method="post" autocomplete="off">
    <ul>
        <li>
            <label for="Nama">Nama :</label>
            <input type="text" name="Nama" id="Nama" required>
        </li>
        <li>
            <label for="Nomor">Nomor Telp/Wa :</label>
            <input type="Nomor" name="Nomor" id="Nomor" required>
        </li>
        <li>
            <label for="Alamat pengiriman">Alamat pengiriman :</label>
            <input type="password" name="Alamat pengiriman" id="Alamat pengiriman" required>
        </li>
        <li>
            <label for="Barang">Barang  :</label>
            <input type="password" name="Barang" id="Barang" required>
        </li>
        <li>
            <label for="Jumlah">Jumlah :</label>
            <input type="password" name="Jumlah" id="Jumlah" required>
        </li>
        <li>
            <label for="Pesan">Permintaan :</label>
            <input type="password" name="Pesan" id="Pesan" required>
        </li>
        <li>
            <button type="submit" name="register">Submit</button>
        </li>
    </ul>
</form>
</body>
</html>
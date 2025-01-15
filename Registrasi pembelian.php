<?php 
require 'function.php';
if (isset($_POST["register"])){

    if(pembelian($_POST) > 0) {
        echo "<script>
        alert('Pembeli baru berhasil ditambahkan');
        </script>";
        header("Location: Login admin.php");
        exit;
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
<form action="" method="post" >
    <ul>
        <li>
            <label for="Nama">Nama :</label>
            <input type="text" name="Nama" id="Nama" autocomplete="off" required>
        </li>
        <li>
            <label for="Nomor">Nomor Telp/Wa :</label>
            <input type="Number" name="Nomor" id="Nomor"autocomplete="off" required>
        </li>
        <li>
            <label for="Alamat pengiriman">Alamat pengiriman :</label>
            <input type="text" name="Alamat pengiriman" id="Alamat pengiriman" autocomplete="off"required>
        </li>
        <li>
            <label for="Barang">Barang  :</label>
            <input type="text" name="Barang" id="Barang" autocomplete="off" required>
        </li>
        <li>
            <label for="Jumlah">Jumlah :</label>
            <input type="Number" name="Jumlah" id="Jumlah"autocomplete="off" required>
        </li>
        <li>
            <label for="Pesan">Permintaan :</label>
            <input type="text" name="Pesan" id="Pesan"autocomplete="off" required>
        </li>
        <li>
            <button type="submit" name="register">Submit</button>
        </li>
    </ul>
</form>
</body>
</html>
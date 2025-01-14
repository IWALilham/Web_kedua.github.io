<?php 
require "function.php";
session_start();
if(!isset($_SESSION["Login"])) {
    header("Location: Login admin.php");
    exit;
}

$orang = action("SELECT * FROM pembeli ORDER BY id DESC ");
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

<?php foreach ($orang as $org):?><!-- untuk pengulangan -->
<tr>
    <td><?= $org ["Nama"]  ?></td>
    <td><?= $org ["Nomor"]  ?></td>
    <td><?= $org ["Alamat"]  ?></td>
    <td><?= $org ["Barang"]  ?></td>
    <td><?= $org ["Jumlah"]  ?></td>
    <td><?= $org ["Pesan"]  ?></td>
</tr>
<?php endforeach ;?><!-- untuk pengulangan -->
</table>

</body>
</html>
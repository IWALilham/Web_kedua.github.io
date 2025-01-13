<?php
$db = mysqli_connect("127.0.0.1", "root", "muhammad ilham 2372005", "web_kedua");

function action($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function Registrasi($data)
    {
        global $db;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($db, $data["password"]);
        $password2 = mysqli_real_escape_string($db, $data["password2"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($db, "SELECT Nama FROM admin WHERE Nama = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
        alert('Username sudah terdaftar')
        </script>";
            return false;
        }

        //cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
            alert('konfirmasi password tidak sesuai!')
            </script>";
            return false;
        }

        //enkrips password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambahkan userbaru ke database
        mysqli_query($db, "INSERT INTO admin (Nama, Password) VALUES('$username','$password')");

        return mysqli_affected_rows($db);
    }

    function pembelian($data)
    {
        global $db;

        $Nama = strtolower(stripslashes($data["Nama"]));
        $Nomor = $data["Nomor"];
        $Alamat = $data["Alamat"];
        $Barang = $data["Barang"];
        $Jumlah = $data["Jumlah"];
        $Pesan = $data["Pesan"];

        //tambahkan Pembeli ke database
        mysqli_query($db, "INSERT INTO admin (Nama, Nomor, Alamat, Barang, Jumlah, Pesan) VALUES('$Nama','$Nomor','$Alamat','$Barang','$Jumlah','$Pesan',)");

        return mysqli_affected_rows($db);
    }
?>
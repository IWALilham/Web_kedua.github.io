<?php
$db = mysqli_connect("127.0.0.1", "root", "muhammad ilham 2372005", "web_kedua");

function action($query)
{
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

    $Nama = htmlspecialchars(strtolower(stripslashes($data["Nama"])));
    $Nomor = htmlspecialchars($data["Nomor"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Barang = htmlspecialchars($data["Barang"]);
    $Jumlah = htmlspecialchars($data["Jumlah"]);
    $Pesan = htmlspecialchars($data["Pesan"]);

    //tambahkan Pembeli ke database
    mysqli_query($db, "INSERT INTO admin (Nama, Nomor, Alamat, Barang, Jumlah, Pesan) VALUES('$Nama','$Nomor','$Alamat','$Barang','$Jumlah','$Pesan',)");

    return mysqli_affected_rows($db);
}

function tambah($data)
{
    global $db;

    $Nama_barang = htmlspecialchars($data["Nama_barang"]);
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $Jumlah = htmlspecialchars($data["Jumlah"]);

    //upload gambar
    $Gambar = upload();
    if (!$Gambar) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO barang_jualan (Nama_barang,Harga,Deskripsi,Jumlah,Gambar) VALUES ('$Nama_barang','$Harga','$Deskripsi','$Jumlah','$Gambar')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function upload()
{
    $namaFile = $_FILES["Gambar"]["name"];
    $ukuranFile = $_FILES["Gambar"]["size"];
    $error = $_FILES["Gambar"]["error"];
    $tmpName = $_FILES["Gambar"]["tmp_name"];

    //cek apakah tidak ada gambar yang diuploas
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo " <script>
            alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar !');
            </script>";
        return false;
    }

    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    //lolos pengecekan, gambar siap upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;


}

?>
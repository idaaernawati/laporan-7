<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgs7no23";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jk"];
    $gaji = $_POST["gaji"];

    // query insert data ke database dalam tabel anggota
    $query = "INSERT INTO pegawai (fname, lname, tgl_lahir, alamat, jk, gaji) VALUES ('$fname', '$lname', '$tgl_lahir', '$alamat', '$jk', '$gaji')";
    if(mysqli_query($conn, $query)){
        header("Location: tgs7-3(2. read tabel).php");
    }else{
        echo "Tambah data gagal";
    }
}
mysqli_close($conn); // menutup koneksi ke database
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
    <h2>Tambah Data Pegawai</h2>
    <form action="tgs7-3(3. create data).php" method="post">
        <table>
            <tr><td>Nama Depan</td><td><input type="text" name="fname"></td></tr>
            <tr><td>Nama Belakang</td><td><input type="text" name="lname"></td></tr>
            <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir"></td></tr>
            <tr><td>Alamat</td><td><textarea name="alamat" cols="21" rows="3"></textarea></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type="text" name="jk"></td></tr>
            <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>

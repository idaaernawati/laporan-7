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
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jk"];
    $gaji = $_POST["gaji"];

    // update data pegawai
    $sql = "UPDATE pegawai SET fname='$fname', lname='$lname', tgl_lahir='$tgl_lahir', alamat='$alamat', jk='$jk', gaji='$gaji' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // mengambil data pegawai yang akan diubah
    $sql = "SELECT * FROM pegawai WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data Pegawai</title>
</head>
<body>
    <h2>Update Data</h2>
    <form action="tgs7-3(4. update data).php" method="post">
        <table>
            <tr><td>Nama Depan</td><td><input type="text" name="fname" value="<?php echo $row['fname']; ?>"></td></tr>
            <tr><td>Nama Belakang</td><td><input type="text" name="lname" value="<?php echo $row['lname']; ?>"></td></tr>
            <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"></td></tr>
            <tr><td>Alamat</td><td><textarea name="alamat" cols="20" rows="3"><?php echo $row['alamat']; ?></textarea></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type="text" name="jk" value="<?php echo $row['jk']; ?>"></td></tr>
            <tr><td>Gaji</td><td><input type="number" name="gaji" value="<?php echo $row['gaji']; ?>"></td></tr>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>
    <?php
    } else {
        echo "Data tidak ditemukan";
    }
}

// menutup koneksi ke database
mysqli_close($conn);
?>
</body>
</html>

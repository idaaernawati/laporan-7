<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgs7no1";


// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//menampilkan data dari tabel buku_tamu
$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data dari setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID_BT: " . $row["ID_BT"]. " - Nama: " . $row["NAMA"]. " - Email: " . $row["EMAIL"]. " - Isi: " . $row["ISI"]. "<br>";
    }
} else {
    echo "Tidak ada data";
}

mysqli_close($conn);
?>

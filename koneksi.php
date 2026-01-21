<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "fasera";

$koneksi = mysqli_connect($host, $user, $pass, $db);

mysqli_query($koneksi, "INSERT INTO laporan VALUES (NULL, 1, 'KURSI PATAH', 'KERUSAKAN FASILITAS', 'KELAS 12 RPL 1', 'KURSI FAIZA PATAH', '2000-02-28')");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
